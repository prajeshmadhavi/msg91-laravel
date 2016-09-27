var gulp = require('gulp');
var gulpGulp = require('gulp-gulp');
var elixir = require('laravel-elixir');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var mainBowerFiles = require('main-bower-files');

//script paths

gulp.task('bower-files', function() {
    return gulp.src(mainBowerFiles(/* options */), { base: 'assets/vendor' })
        .pipe(gulp.dest('assets/js/lib'));
});

var jsFiles = 'assets/js/lib/**/*.js',
    jsDest = 'assets/js';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('all.js'))
        .pipe(gulp.dest(jsDest));
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('app.scss');
});


