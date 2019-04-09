"use strict";

// Load plugins
const autoprefixer = require("autoprefixer");
const bs = require("browser-sync").create();
const cp = require("child_process");
const cssnano = require("cssnano");
const del = require("del");
const eslint = require("gulp-eslint");
const gulp = require("gulp");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const sass = require("gulp-sass");
const webpack = require("webpack");
const webpackconfig = require("./webpack.config.js");
const webpackstream = require("webpack-stream");

const SASS_SOURCES = [
  './*.scss', // This picks up our style.scss file at the root of the theme
  'css/**/*.scss', // All other Sass files in the /css directory
];

function browserSync (done) {
  bs.init({
   proxy: 'http://mklighting.test:3001/'
  })

  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  bs.reload();
  done();
}

// Clean assets
function clean() {
  return del(["./_site/assets/"]);
}

// Optimize Images
function images() {
  return gulp
    .src("./assets/img/**/*")
    .pipe(newer("./_site/assets/img"))
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [
            {
              removeViewBox: false,
              collapseGroups: true
            }
          ]
        })
      ])
    )
    .pipe(gulp.dest("./_site/assets/img"));
}

// CSS task
function css() {
  return gulp
    .src("./assets/scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./_site/assets/css/"))
    .pipe(rename({ suffix: ".min" }))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest("./_site/assets/css/"))
    .pipe(browsersync.stream());
}

// Lint scripts
function scriptsLint() {
  return gulp
    .src(["./assets/js/**/*", "./gulpfile.js"])
    .pipe(plumber())
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
}

// Transpile, concatenate and minify scripts
function scripts() {
  return (
    gulp
      .src(["./assets/js/**/*"])
      .pipe(plumber())
      .pipe(webpackstream(webpackconfig, webpack))
      // folder only, filename is specified in webpack config
      .pipe(gulp.dest("./_site/assets/js/"))
      .pipe(browsersync.stream())
  );
}

// Watch files
function watchFiles() {
  gulp.watch("./assets/scss/**/*", css);
  gulp.watch("./assets/js/**/*", gulp.series(scriptsLint, scripts));
  gulp.watch(
    [
      "./_includes/**/*",
      "./_layouts/**/*",
      "./_pages/**/*",
      "./_posts/**/*",
      "./_projects/**/*"
    ],
    gulp.series(jekyll, browserSyncReload)
  );
  gulp.watch("./assets/img/**/*", images);
}

// define complex tasks
const js = gulp.series(scriptsLint, scripts);
const build = gulp.series(clean, gulp.parallel(css, images, jekyll, js));
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
exports.images = images;
exports.css = css;
exports.js = js;
exports.clean = clean;
exports.build = build;
exports.watch = watch;

// gulp.task('compile:sass', gulp.series('lint:sass', function() {
//   gulp.src(SASS_SOURCES, { base: './' })
//     .pipe(plumber()) // Prevent termination on error
//     .pipe(sass({
//       indentType: 'tab',
//       indentWidth: 1,
//       outputStyle: 'expanded', // Expanded so that our CSS is readable
//     })).on('error', sass.logError)
//     .pipe(postcss([
//       autoprefixer({
//         browsers: ['last 2 versions'],
//         cascade: false,
//       })
//     ]))
//     .pipe(groupmq()) // Group media queries!
//     .pipe(gulp.dest('.')) // Output compiled files in the same dir as Sass sources
//     .pipe(bs.stream())
//   })); // Stream to browserSync

// /**
//  * Start up browserSync and watch Sass files for changes 
//  */
// gulp.task('watch:sass', gulp.series('compile:sass', function() {
//   bs.init({
//     proxy: 'http://mklighting.test:3001/'
//   });

//   gulp.watch(SASS_SOURCES, gulp.series('compile:sass', 'lint:sass'));
// }));


/**
 * Default task executed by running `gulp`
 */
gulp.task('default', gulp.parallel(browserSync) );
