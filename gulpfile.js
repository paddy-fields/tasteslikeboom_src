var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var changed = require('gulp-changed');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var del = require('del');
var imagemin = require('gulp-imagemin');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var versionAppend = require('gulp-version-append');


// update the script parameters with the package.json version
gulp.task('version', function(){

    // update the script parameters with the package.json version
	return gulp.src(['assets/functions.php'])
          .pipe(versionAppend(['css','js']))
          .pipe(gulp.dest('./'))

});

// compile sass and autoprefix
gulp.task('sass', function(){

	// show sass compilation errors in growl
	var onError = function(err) {
        notify.onError({
                    title:    "Gulp",
                    subtitle: "Sass compiler error",
                    message:  "Error: <%= error.message %>",
                    sound: "Hero"
                })(err);

        this.emit('end');
    };

	return gulp.src('./assets/scss/*.scss')
		.pipe(plumber({errorHandler: onError}))
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream())

});

// compile vendor sass, minify and autoprefix
gulp.task('sass-vendor', function(){

	// show sass compilation errors in growl
	var onError = function(err) {
        notify.onError({
                    title:    "Gulp",
                    subtitle: "Sass compiler error",
                    message:  "Error: <%= error.message %>",
                    sound: "Hero"
                })(err);

        this.emit('end');
    };

	return gulp.src('./assets/scss/vendor/*.scss')
		.pipe(plumber({errorHandler: onError}))
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(cleanCSS())
		.pipe(gulp.dest('./assets/css'))
		.pipe(browserSync.stream())

});


// optimise images
gulp.task('images', function(){

	return gulp.src('assets/img/*')
		.pipe(changed('./img'))
		.pipe(imagemin([imagemin.jpegtran({progressive: true})]))
		.pipe(gulp.dest('./img'))

});

// BrowserSync reload all browsers
gulp.task('browsersync-reload', function () {

  browserSync.reload();

});

// watch for changes and initialise browserSync
gulp.task('watch', function(){

	browserSync.init({
        proxy: "http://localhost:8888/current/tasteslikeboom_wp/joefoodvan/"
    });

	gulp.watch('./assets/scss/**/*.scss',['sass']);
	gulp.watch('./*.php',['browsersync-reload']);
	gulp.watch('./assets/img/*',['images','browsersync-reload']);

});

// build ready for produciton
gulp.task('build', ['sass','sass-vendor','images'], function(){

	// update the script parameters with the package.json version
	return gulp.src(['assets/functions.php'])
          .pipe(versionAppend(['css','js']))
          .pipe(gulp.dest('./'))

});


