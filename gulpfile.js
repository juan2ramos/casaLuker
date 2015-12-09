var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minifyCss = require('gulp-minify-css');


gulp.task('styles', function() {
    gulp.src('wp-content/themes/luker/assets/css/style.sass')
        .pipe(sass())
        .pipe(minifyCss())
        .pipe(gulp.dest('wp-content/themes/luker/assets/css/'));
});

gulp.task('default', ['sass']);

gulp.task('sass', function () {
    gulp.watch(['wp-content/themes/luker/assets/css/style.sass', 'wp-content/themes/luker/assets/css/lib/*.sass'],['styles']);
})
