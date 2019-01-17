var gulp = require("gulp");
var sass = require("gulp-sass");
var include = require("gulp-include");
var minify = require("gulp-minify");
var runSequence = require("run-sequence");
var imagemin = require("gulp-imagemin");
var minifyCss = require("gulp-minify-css");
var prefix = require("gulp-autoprefixer");
var purge = require("gulp-css-purge");

gulp.task("sass", function() {
  return gulp
    .src("./scss/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(
      minifyCss({
        keepSpecialComments: 1
      })
    )
    .pipe(gulp.dest("./css"));
});

gulp.task("purge", function() {
  return gulp
    .src("./scss/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(
      minifyCss({
        keepSpecialComments: 1
      })
    )
    .pipe(
      purge({
        trim: true,
        shorten: true,
        verbose: true
      })
    )
    .pipe(gulp.dest("./css"));
});

gulp.task("scripts", function() {
  gulp
    .src("./main.js")
    .pipe(include())
    .pipe(minify())
    .pipe(gulp.dest("./js"));
});

gulp.task("images", function() {
  return gulp
    .src("img/**/*.+(png|jpg|gif|svg)")
    .pipe(imagemin())
    .pipe(gulp.dest("/img"));
});

gulp.task("prefix", function() {
  gulp
    .src("css/main.css")
    .pipe(prefix())
    .pipe(gulp.dest("css"));
});

gulp.task("watch", function() {
  gulp.watch("./scss/*.scss", ["sass"]);
  gulp.watch("./js/*.js", ["scripts"]);
});

gulp.task("build", function(callback) {
  runSequence(["purge", "scripts"], "images", "prefix", callback);
});

gulp.task("default", function(callback) {
  runSequence(["sass", "scripts"], "watch", callback);
});
