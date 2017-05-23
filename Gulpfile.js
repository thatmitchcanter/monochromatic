"use strict";

var gulp 		= 			require("gulp"),
browserSync 	= 			require("browser-sync"),
sass 			= 			require("gulp-sass"),
bourbon 		= 			require("node-bourbon").includePaths,
neat 			= 			require("node-neat").includePaths,
normalize 		=			require('node-normalize-scss').includePaths;
var reload      = 			browserSync.reload;

// Compiles all gulp tasks
gulp.task("default", ["watch"]);

// Live reload anytime a file changes
gulp.task("watch", ["browserSync", "sass"], function() {
	gulp.watch("assets/stylesheets/**/*.scss", ["sass"]);
	gulp.watch("*.php").on("change", reload);
});

// Spin up a server
gulp.task("browserSync", function() {
	browserSync({
		proxy: {
		    target: "http://mitchcanter.dev",
		}
	})
});

// Compile SASS files
gulp.task("sass", function() {
	gulp.src("assets/stylesheets/**/*.scss")
	.pipe(sass({
		includePaths: bourbon,
		includePaths: neat,
	}))
	.pipe(gulp.dest("."))
	.pipe(browserSync.stream());
});