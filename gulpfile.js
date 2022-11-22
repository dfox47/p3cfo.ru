'use strict';
// npm install --save-dev gulp gulp-concat gulp-csso fs vinyl-ftp gulp-util gulp-rename gulp-sass gulp-uglify

let fs              = require('fs');
let concat          = require('gulp-concat');
let config          = JSON.parse(fs.readFileSync('../config.json'))
let cssMinify       = require('gulp-csso');
let ftp             = require('vinyl-ftp');
let gulp            = require('gulp');
let gutil           = require('gulp-util');
let rename          = require('gulp-rename');
let sass            = require('gulp-sass')(require('sass'));
let uglify          = require('gulp-uglify');

// FTP config
var host            = config.host;
var password        = config.password;
var port            = config.port;
var user            = config.user;

let remoteFolder            = '/www/p3cfo.ru';
let remoteFolder2017        = remoteFolder + '/2017';
let remoteFolder2018        = remoteFolder + '/2018';
let remoteFolder2019        = remoteFolder + '/2019';
let remoteFolder2020        = remoteFolder + '/2020';
let remoteFolderCss         = remoteFolder + '/css';
let remoteFolderJs          = remoteFolder + '/js';
let remoteTemplateParts     = remoteFolder + '/template-parts';

let localFolder2017         = '2017';
let localFolder2018         = '2018';
let localFolder2019         = '2019';
let localFolder2020         = '2020';
let localFolderCss          = 'css';
let localFolderJs           = 'js';
let localTemplateParts      = 'template-parts';



function getFtpConnection() {
	return ftp.create({
		host:           host,
		log:            gutil.log,
		password:       password,
		parallel:       3,
		port:           port,
		user:           user
	});
}

let conn = getFtpConnection();



gulp.task('2017', function () {
	return gulp.src(localFolder2017 + '/**/*')
		.pipe(conn.dest(remoteFolder2017));
});

gulp.task('2018', function () {
	return gulp.src(localFolder2018 + '/**/*')
		.pipe(conn.dest(remoteFolder2018));
});

gulp.task('2019', function () {
	return gulp.src(localFolder2019 + '/**/*')
		.pipe(conn.dest(remoteFolder2019));
});

gulp.task('2020', function () {
	return gulp.src(localFolder2020 + '/**/*')
		.pipe(conn.dest(remoteFolder2020));
});



gulp.task('css', function () {
	return gulp.src(localFolderCss + '/styles.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder));
});

gulp.task('copy_css', function () {
	return gulp.src(localFolderCss + '/**/*')
		.pipe(conn.dest(remoteFolderCss));
});

gulp.task('copy_js', function () {
	return gulp.src(localFolderJs + '/**/*')
		.pipe(conn.dest(remoteFolderJs));
});

gulp.task('html', function () {
	return gulp.src('/*.html')
		.pipe(conn.dest(remoteFolder));
});

gulp.task('php', function () {
	return gulp.src('/*.php')
		.pipe(conn.dest(remoteFolder));
});

gulp.task('php_template_parts', function () {
	return gulp.src(localTemplateParts + '/**/*')
		.pipe(conn.dest(remoteTemplateParts));
});

gulp.task('watch', function() {
	gulp.watch(localFolder2017 + '/**/*',           gulp.series('2017'));
	gulp.watch(localFolder2018 + '/**/*',           gulp.series('2018'));
	gulp.watch(localFolder2019 + '/**/*',           gulp.series('2019'));
	gulp.watch(localFolder2020 + '/**/*',           gulp.series('2020'));
	gulp.watch(localFolderCss + '/**/*',            gulp.series('css', 'copy_css'));
	gulp.watch('*.html',                            gulp.series('html'));
	gulp.watch('*.php',                             gulp.series('php'));
	gulp.watch(localFolderJs + '/**/*',             gulp.series('copy_js'));
	gulp.watch(localTemplateParts + '/**/*',        gulp.series('php_template_parts'));
});

gulp.task('default', gulp.series(
	'watch'
));
