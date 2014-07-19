/**
 * Include all gulp packages
 */
var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	minifycss = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	notify = require('gulp-notify'),
	uglify = require('gulp-uglify'),
	cache = require('gulp-cache');


/**
 * What folders are things going to be located in
 * @type {String}
 */
var publicDir = 'public/',
	assetsDir = 'assets/';

/**
 * Set up a gulp task which runs on JS
 */
gulp.task('js', function() {
	return gulp.src(assetsDir + '/js/**/*.js')
		.pipe(concat('save.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(publicDir + assetsDir + 'js'))
		//.pipe(notify({ message: 'JS task has completed.' }))
});

/**
 * Set up a gulp task which runs on CSS with SASS
 */
gulp.task('css', function() {
	return gulp.src(assetsDir + '/styles/main.scss')
		.pipe(sass({ style: 'expanded' }))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest(publicDir + assetsDir + 'css'))
		//.pipe(notify({ message : 'CSS task has completed.' }))
});

/**
 * Set up a gulp task which runs on images
 */
gulp.task('images', function() {
	return gulp.src(assetsDir + '/img/**/*')
		.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
		.pipe(gulp.dest(publicDir + assetsDir + 'img'))
		//.pipe(notify({ message: 'Image task has completed.' }))
});

/**
 * Setup default task to run all other tasks
 */
gulp.task('default', ['js', 'css', 'images', 'watch']);

/**
 * Watch the files and auto run the tasks
 */
gulp.task('watch', function() {
	// watch js files
	gulp.watch(assetsDir + '/js/**/*.js', ['js']);
	// watch css files
	gulp.watch(assetsDir + '/styles/**/*.scss', ['css']);
	// watch images
	gulp.watch(assetsDir + '/img/**/*', ['images']);
});
