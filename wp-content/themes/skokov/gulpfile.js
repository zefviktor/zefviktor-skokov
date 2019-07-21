

const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');



gulp.task('sass', function () {
    return gulp.src('assets/sass/**/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('css', function () {
    return gulp.src('assets/css/**/*')
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('fonts', function () {
    return gulp.src('assets/fonts/**/*')
        .pipe(gulp.dest('fonts'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('img', function () {
    return gulp.src('assets/img/**/*.*')
        .pipe(gulp.dest('img'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('js', function () {
    return gulp.src('assets/js/**/*.js')
        .pipe(gulp.dest('js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('html', function () {
    return gulp.src('assets/**/*.html')
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({stream: true}));
});


gulp.task('watch', gulp.series('html', 'css', 'img', 'sass', 'js', 'fonts', (done) => {
    browserSync.init({
        proxy: "localhost/zefviktor-skokov",
        port: 8000,
        // tunnel: true
    });
    // browserSync.init({
    //     server: "./akad",
    //     notify: false,
    //     ui: {
    //         port: 3000
    //     },
    //     // tunnel: true
    // });
    gulp.watch('assets/sass/**/*.sass', gulp.parallel('sass'));
    gulp.watch('assets/js/**/*.js', gulp.parallel('js'));
    gulp.watch('assets/img/**/*.*', gulp.parallel('img'));
    gulp.watch('assets/**/*.html', gulp.parallel('html'));
    gulp.watch('assets/fonts/**/*', gulp.parallel('fonts'));
    done();
}));



