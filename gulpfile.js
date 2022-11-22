// npm install --save-dev gulp gulp-concat gulp-csso fs vinyl-ftp gulp-util gulp-rename gulp-sass gulp-uglify

const fs            = require('fs')
const concat        = require('gulp-concat')
const config        = JSON.parse(fs.readFileSync('../config.json'))
const cssMinify     = require('gulp-csso')
const ftp           = require('vinyl-ftp')
const gulp          = require('gulp')
const gutil         = require('gulp-util')
const rename        = require('gulp-rename')
const sass          = require('gulp-sass')(require('sass'))
const uglify        = require('gulp-uglify')

// FTP config
const host          = config.host
const password      = config.password
const port          = config.port
const user          = config.user

const remoteFolder          = '/www/p3cfo.ru'
const remoteFolder2017      = remoteFolder + '/2017'
const remoteFolder2018      = remoteFolder + '/2018'
const remoteFolder2019      = remoteFolder + '/2019'
const remoteFolder2020      = remoteFolder + '/2020'
const remoteFolderCss       = remoteFolder + '/css'
const remoteFolderJs        = remoteFolder + '/js'
const remoteTemplateParts   = remoteFolder + '/template-parts'

const localFolder2017         = '2017'
const localFolder2018         = '2018'
const localFolder2019         = '2019'
const localFolder2020         = '2020'
const localFolderCss          = 'css'
const localFolderJs           = 'js'
const localTemplateParts      = 'template-parts'



function getFtpConnection() {
	return ftp.create({
		host:       host,
		log:        gutil.log,
		password:   password,
		parallel:   3,
		port:       port,
		user:       user
	})
}

const conn = getFtpConnection()



gulp.task('2017', function () {
	return gulp.src(localFolder2017 + '/**/*')
		.pipe(conn.dest(remoteFolder2017))
})

gulp.task('2018', function () {
	return gulp.src(localFolder2018 + '/**/*')
		.pipe(conn.dest(remoteFolder2018))
})

gulp.task('2019', function () {
	return gulp.src(localFolder2019 + '/**/*')
		.pipe(conn.dest(remoteFolder2019))
})

gulp.task('2020', function () {
	return gulp.src(localFolder2020 + '/**/*')
		.pipe(conn.dest(remoteFolder2020))
})

gulp.task('css', function () {
	return gulp.src(localFolderCss + '/styles.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_css', function () {
	return gulp.src(localFolderCss + '/**/*')
		.pipe(conn.dest(remoteFolderCss))
})

gulp.task('copy_js', function () {
	return gulp.src(localFolderJs + '/**/*')
		.pipe(conn.dest(remoteFolderJs))
})

gulp.task('html', function () {
	return gulp.src('/*.html')
		.pipe(conn.dest(remoteFolder))
})

gulp.task('php', function () {
	return gulp.src('/*.php')
		.pipe(conn.dest(remoteFolder))
})

gulp.task('php_template_parts', function () {
	return gulp.src(localTemplateParts + '/**/*')
		.pipe(conn.dest(remoteTemplateParts))
})

gulp.task('watch', function() {
	gulp.watch(localFolder2017 + '/**/*',           gulp.series('2017'))
	gulp.watch(localFolder2018 + '/**/*',           gulp.series('2018'))
	gulp.watch(localFolder2019 + '/**/*',           gulp.series('2019'))
	gulp.watch(localFolder2020 + '/**/*',           gulp.series('2020'))
	gulp.watch(localFolderCss + '/**/*',            gulp.series('css', 'copy_css'))
	gulp.watch('*.html',                            gulp.series('html'))
	gulp.watch('*.php',                             gulp.series('php'))
	gulp.watch(localFolderJs + '/**/*',             gulp.series('copy_js'))
	gulp.watch(localTemplateParts + '/**/*',        gulp.series('php_template_parts'))
})

gulp.task('default', gulp.series('watch'))