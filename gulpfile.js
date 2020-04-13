// Adiciona os modulos instalados
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const concatcss = require('gulp-concat-css');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Funçao para compilar o SASS e adicionar os prefixos
function compilaSass() {
  return gulp
  .src('assets/css/scss/**/*.scss')
  .pipe(sass({
    outputStyle: 'compressed'
  }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('public/css/'))
  .pipe(browserSync.stream());
}

// Tarefa de gulp para a função de SASS
gulp.task('sass', function(done){
    compilaSass();
    done();
  });

function concatCss(){
    return gulp.src('public/css/**/*.css')
        .pipe(concatcss('bundle.css'))
        .pipe(gulp.dest('out/'));
}

gulp.task('mincss', concatCss);

// Função para juntar o JS
function gulpJS() {
  return gulp
  .src('assets/js/*.js')
  .pipe(concat('main.js'))
  .pipe(babel({
    presets: ['env']
  }))
  .pipe(uglify())
  .pipe(gulp.dest('public/js/'))
  .pipe(browserSync.stream())
}

gulp.task('mainjs', gulpJS);

// JS Plugins
// function pluginJS() {
//   return gulp
//   .src([
//     'node_modules/jquery/dist/jquery.min.js',
//     'node_modules/moment/min/moment.min.js',
//     'js/plugins/*.js'
//   ])
//   .pipe(concat('assets/js/lib/plugins.js'))
//   .pipe(gulp.dest('js/'))
//   .pipe(browserSync.stream())
// }

// gulp.task('pluginjs', pluginJS);



// Função para iniciar o browser


function browser() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
}

// Tarefa para iniciar o browser-sync
gulp.task('browser-sync', browser);

// Função de watch do Gulp
function watch() {
  gulp.watch('css/scss/**/*.scss', compilaSass);
  gulp.watch('js/**/*.js', gulpJS);
  // gulp.watch('js/plugins/*.js', pluginJS);
  gulp.watch(['*.html']).on('change', browserSync.reload);
}

// Inicia a tarefa de watch
gulp.task('watch', watch);

// Tarefa padrão do Gulp, que inicia o watch e o browser-sync
gulp.task('default', gulp.parallel('watch', 'browser-sync', 'sass', 'mainjs', 'mincss'));