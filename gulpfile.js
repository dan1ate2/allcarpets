'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var mainBowerFiles = require('gulp-main-bower-files');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gulpFilter = require('gulp-filter');
 
gulp.task('sass', function () {
  return gulp.src('wp-content/themes/allcarpets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('wp-content/themes/allcarpets'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('wp-content/themes/allcarpets/sass/**/*.scss', ['sass']);
});

// test-gulp
gulp.task('main-bower-files', function() {
    var filterJS = gulpFilter('**/*.js', { restore: true });
    return gulp.src('bower.json')
        .pipe(mainBowerFiles({
            overrides: {
                bootstrap: {
                    main: [
                        './dist/css/*.min.*',
                        './dist/fonts/*.*'
                    ]
                }
            }
        }))
        .pipe(filterJS)
        .pipe(concat('vendor.js'))
        .pipe(uglify())
        .pipe(filterJS.restore)
        .pipe(gulp.dest('wp-content/themes/allcarpets/test-gulp'));
});

// test-gulp-2
// gulp.task('uglify', function(){
//     return gulp.src('bower.json')
//         .pipe(mainBowerFiles( ))
//         .pipe(uglify())
//         .pipe(gulp.dest('wp-content/themes/allcarpets/test-gulp-2'));
// });