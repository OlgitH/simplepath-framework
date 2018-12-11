// gulpfile.js
var gulp = require("gulp");
var sass = require("gulp-sass");

function style() {
    return (
        gulp
            .src("sass/main.scss")
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(gulp.dest("css"))
    );
}


function watch(){
    gulp.watch('sass/**/*.scss', style)
}

// Don't forget to expose the task!
exports.watch = watch
