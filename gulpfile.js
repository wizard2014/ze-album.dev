'use strict';

var gulp         = require('gulp'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglify'),
    sass         = require('gulp-sass'),
    minifyCss    = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer');

var paths = {
    bower:  './bower_components',
    assets: './assets'
};

gulp.task('styles', function() {
    return gulp.src([
        paths.bower  + '/bootstrap-material-design/dist/css/bootstrap-material-design.css',
        paths.bower  + '/bootstrap-material-design/dist/css/ripples.css',
        paths.assets + '/styles/app.scss'
    ])
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('app.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('./public/css'));
});

gulp.task('scripts', function() {
    return gulp.src([
        paths.bower   + '/bootstrap-material-design/dist/js/material.js',
        paths.bower   + '/bootstrap-material-design/dist/js/ripples.js',
        paths.assets  + '/scripts/app.js'
    ])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./public/js'));
});

gulp.task('watch', function() {
    gulp.watch(paths.assets + '/styles/**/*.scss', ['styles']);
    gulp.watch(paths.assets + '/scripts/**/*.js', ['scripts']);
});
gulp.task('default', ['styles', 'scripts']);