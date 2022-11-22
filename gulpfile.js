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
const remote2017            = remoteFolder + '/2017'
const remote2018            = remoteFolder + '/2018'
const remote2019            = remoteFolder + '/2019'
const remote2020            = remoteFolder + '/2020'
const remoteCss             = remoteFolder + '/css'
const remoteJs              = remoteFolder + '/js'
const remoteTemplateParts   = remoteFolder + '/template-parts'

const local2017             = '2017'
const local2018             = '2018'
const local2019             = '2019'
const local2020             = '2020'
const localCss              = 'css'
const localJs               = 'js'
const localTemplateParts    = 'template-parts'



function getFtpConnection() {
	return ftp.create({
		host:           host,
		log:            gutil.log,
		password:       password,
		parallel:       3,
		port:           port,
		user:           user
	})
}

const conn = getFtpConnection()



gulp.task('2017', function () {
	return gulp.src(local2017 + '/**/*').pipe(conn.dest(remote2017))
})

gulp.task('2018', function () {
	return gulp.src(local2018 + '/**/*').pipe(conn.dest(remote2018))
})

gulp.task('2019', function () {
	return gulp.src(local2019 + '/**/*').pipe(conn.dest(remote2019))
})

gulp.task('2020', function () {
	return gulp.src(local2020 + '/**/*').pipe(conn.dest(remote2020))
})

gulp.task('css', function () {
	return gulp.src(localCss + '/styles.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_css', function () {
	return gulp.src(localCss + '/**/*').pipe(conn.dest(remoteCss))
})

gulp.task('copy_js', function () {
	return gulp.src(localJs + '/**/*').pipe(conn.dest(remoteJs))
})

gulp.task('html', function () {
	return gulp.src('/*.html').pipe(conn.dest(remoteFolder))
})

gulp.task('php', function () {
	return gulp.src('/*.php').pipe(conn.dest(remoteFolder))
})

gulp.task('php_template_parts', function () {
	return gulp.src(localTemplateParts + '/**/*').pipe(conn.dest(remoteTemplateParts))
})

gulp.task('watch', function() {
	gulp.watch('*.html',                        gulp.series('html'))
	gulp.watch('*.php',                         gulp.series('php'))
	gulp.watch(local2017 + '/**/*',             gulp.series('2017'))
	gulp.watch(local2018 + '/**/*',             gulp.series('2018'))
	gulp.watch(local2019 + '/**/*',             gulp.series('2019'))
	gulp.watch(local2020 + '/**/*',             gulp.series('2020'))
	gulp.watch(localCss + '/**/*',              gulp.series('css', 'copy_css'))
	gulp.watch(localJs + '/**/*',               gulp.series('copy_js'))
	gulp.watch(localTemplateParts + '/**/*',    gulp.series('php_template_parts'))
})

gulp.task('default', gulp.series('watch'))