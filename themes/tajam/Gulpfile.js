'use strict';

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    //bourbon = require('node-bourbon'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();

var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var sourcemaps = require('gulp-sourcemaps');

// Scss stylesheets
gulp.task('stylesheets', function() {
    return gulp.src('stylesheets/**/*.scss')
        // .pipe(wait(150))
        //.pipe(wait(150))
        .pipe(sass({
            outputStyle: 'expanded',
            //includePaths: bourbon.includePaths
        })).on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    // app.js is your main JS file with all your module inclusions
    return browserify({
        entries: 'js/main.js',
        debug: true
    })
        .transform("babelify", {
            presets: ["es2015", "es2016"]
        })
        .bundle()
        .pipe(source('app.js'))
        .pipe(buffer())
        // .pipe(sourcemaps.init())
       //.pipe(uglify())
        // .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('js/min/'))
        .pipe(browserSync.stream());
});

gulp.task('watch', function() {
    watch(['stylesheets/**/*.scss'], function(event, cb) {
        gulp.start('stylesheets');
    });
    watch(['./*.html'], function(event, cb) {
        browserSync.reload();
    });
    watch(['./js/components/*.js', './js/main.js', '!./js/min/app.js'], function(event, cb) {
        gulp.start('js');
    });
});

gulp.task('serve', function() {
    browserSync.init({
        server: "./",
        // proxy: "http://tajam.loc",
        // open: true,
        // port: 8081
    });

});

// Run
gulp.task('default', [
    'stylesheets',
    'js',
    'watch'
]);

gulp.task('server', [
    'stylesheets',
    'js',
    'serve',
    'watch'
]);