var gulp					 = require('gulp');
var plumber				 = require('gulp-plumber');
var watch					 = require('gulp-watch');
var rename				 = require('gulp-rename');
var sass					 = require('gulp-sass');
var postcss        = require('gulp-postcss');
var autoprefixer   = require('autoprefixer');
var cssnano        = require('cssnano');
var webpackStream  = require('webpack-stream');
var webpack        = require('webpack');

var dir = {
  src: {
    sass: './src/sass/**/*.scss',
    js: './src/js/**/*.js'
  },
  dist: {
    css: './css',
    js: './js'
  }
}

/**
 * webpack config
 */
var webpackConfig = require('./webpack.config');

/**
 * sass
 */
gulp.task('sass', function() {
  gulp.src(dir.src.sass)
    .pipe(plumber({
      errorHandler: function(err) {
        console.log(err.messageFormatted);
        this.emit('end');
      }
    }))
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      })
    ]))
    .pipe(gulp.dest(dir.dist.css))
    .pipe(postcss([
      cssnano({
        'zindex': false
      })
    ]))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(dir.dist.css));
});

/**
 * webpack
 */
gulp.task('webpack', function(){
  return plumber({
      errorHandler: function(err) {
        console.log(err.messageFormatted);
        this.emit('end');
      }
    })
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(gulp.dest(dir.dist.js));
});

/**
 * watch
 */
gulp.task('watch',['sass','webpack'],function() {
  watch(dir.src.sass, function(event) {
    gulp.start('sass');
  });
  watch(dir.src.js, function(event) {
    gulp.start('webpack');
  });
});
/**
 * default
 */
gulp.task('default',['watch']);
