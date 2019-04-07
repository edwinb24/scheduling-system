const gulp = require('gulp');
const concat = require('gulp-concat');
const cssMin = require('gulp-css');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();

//compile CSS
function style() {
  return gulp.src('./src/css/uncompress/**/*')
  .pipe(concat('styles.css'))
  .pipe(cssMin())
  .pipe(gulp.dest('./src/css'))
  .pipe(browserSync.stream());
}

//compile JS
function script() {
  return gulp.src([
          "./src/js/scripts/*.js"
        ])
        .pipe(concat('libs.js'))
        .pipe(uglify())
        .pipe(gulp.dest("./src/js"));
}

function watch() {
  browserSync.init({
    proxy: "local.scheduling-system.com:80"
  });
  gulp.watch('./src/css/uncompress/**/*.css', style);
  gulp.watch('./src/js/scripts/**/*.js', script);
  gulp.watch('./src/js/*.js').on('change', browserSync.reload);
  gulp.watch('./*.php').on('change', browserSync.reload);
  gulp.watch('./includes/*.php').on('change', browserSync.reload);
  gulp.watch('./*.html').on('change', browserSync.reload);
}

exports.style = style;
exports.script = script;
exports.watch = watch;
