// Include the necessary modules.

// Npm install dependencies -- > npm install gulp browser-sync gulp-sass gulp-postcss autoprefixer gulp-concat gulp-sourcemaps gulp-uglify --save-dev


var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass');
    postcss = require('gulp-postcss');
    autoprefixer = require('autoprefixer');
    concat = require('gulp-concat');
    sourcemaps = require('gulp-sourcemaps');
    uglify = require('gulp-uglify');

// Configure Browsersync.
gulp.task('browser-sync', function() {
    var files = [
        './style.css',
        './*.php',
        './js/*.js'
    ];

// Initial Browsersync with PHP Server
browserSync.init(files, {
    proxy: "http://localhost:8888/paradise" // Change to match local host address

  });

});


// Configure Sass task to run when the specified .scss files change.
// Browsersync will also reload browsers.

gulp.task('sass', function() {
    return gulp.src([
        'node_modules/lity/dist/lity.css',
        'sass/style.scss',
        'node_modules/bootstrap-scss/bootstrap-grid.scss',
        'node_modules/slick-slider/slick/slick.css',
        'node_modules/aos/dist/aos.css',

        ])
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' })
            .on('error', sass.logError)
        )
        .pipe(postcss([
            autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false,
                grid: true
            })
        ]))
        .pipe(concat('style.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});



gulp.task('js', function () {
    return gulp.src([
        'node_modules/slick-slider/slick/slick.js',
        'node_modules/aos/dist/aos.js',
        'node_modules/lity/dist/lity.js',
        'js/theme/*.js'
    ])
    .pipe(concat('theme.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js'));

});

// Create the default task that can be called using 'gulp'.
// The task will process sass, run browser-sync and start watching for changes.
gulp.task('default', ['sass', 'js', 'browser-sync'], function() {
    gulp.watch("sass/**/*.scss", ['sass']);
    gulp.watch("js/theme/*.js", ['js']);
})
