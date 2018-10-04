'use strict';

var gulp = require('gulp'),
    prefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
    iconfont = require('gulp-iconfont'),
    wait = require('gulp-wait'),
    browserSync  = require('browser-sync'),
    include = require('gulp-include'),
    concat = require('gulp-concat');

gulp.task('style:build', function () {
    gulp.src('src/import.scss')
        .pipe(wait(200))
        .pipe(sass().on('error', sass.logError))
        .pipe(prefixer())
        .pipe(concat('main.css'))
        .pipe(gulp.dest('public/css/'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('js:build', function () {
    gulp.src(['src/modules/**/*.js', 'src/parts/**/*.js'])
        .pipe(include())
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/js/'))
});

gulp.task('images:build', function () {
    gulp.src('src/images/*.*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/images'))
});

gulp.task('iconfont:build', function() {
    return gulp.src('src/images/iconfont/*.svg')
        .pipe(
            iconfont({
                fontName: 'iconfont',
                prependUnicode: true,
                formats: ['ttf', 'eot', 'woff', 'svg'],
                timestamp: runTimestamp
            })
        )
        .on('glyphs', function(glyphs, options) {
            console.log(glyphs, options);
        })
        .pipe(gulp.dest('public/images/iconfont'));
});

gulp.task('browser-sync', ['style:build'], function() {
    return browserSync.init({
        proxy: "soulvibes.dev",
        notify: false
  })
})

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch(['src/modules/**/*.scss', 'src/parts/**/*.scss', 'src/bootstrap/*.scss', 'src/style.scss'], ['style:build']);
    gulp.watch(['src/parts/**/*.js', 'src/modules/**/*.js'], ['js:build']).on('change', browserSync.reload);
    gulp.watch(['public/index.php', 'src/modules/**/*.php', 'src/parts/**/*.php'], browserSync.reload);
})