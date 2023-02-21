// npm i -D gulp sass plumber gulp-sass gulp-plumber
// npm i -D autoprefixer cssnano gulp-postcss
// npm i -D gulp-sourcemaps gulp-terser-js gulp-webp gulp-cache 
// npm i -D gulp-imagemin@7.1.0 gulp-avif

const {src, dest, watch, parallel} = require('gulp');

//Sass
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');

//Comprimir CSS
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

//Comprimir Javascript
const terser = require('gulp-terser-js');

// Imagenes
const webp = require("gulp-webp");
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const avif = require("gulp-avif");

// Funciones
function css(done) {
    src('src/scss/**/*.scss')
        .pipe( sourcemaps.init())
        .pipe( plumber())
        .pipe( sass())
        .pipe( postcss([ autoprefixer(), cssnano()]))
        .pipe( sourcemaps.write('.'))
        .pipe( dest( 'build/css'));

    done();
}

function javascript(done) {
    src('src/js/**/*.js')
    .pipe( sourcemaps.init())
    .pipe( terser())
    .pipe( sourcemaps.write('.'))
    .pipe ( dest( 'build/js'));

    done();
}

function dev(done) {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', javascript);

    done();
}

// Funciones imagenes
function imagenes (done) {
    const opciones = {
        optimizationLevel: 3
    }
    src('src/img/**/*.{png,jpeg}')
    .pipe( cache( imagemin( opciones) ) )
    .pipe( dest('build/img'))

    done();
}

function versionWebp (done) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpeg}')
    .pipe ( webp(opciones) )
    .pipe ( dest('build/img') );
    
    done();
}
function versionAvif (done) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpeg}')
    .pipe ( avif(opciones) )
    .pipe ( dest('build/img') );
    
    done();
}

// 
exports.css = css;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.javascript = javascript;
exports.dev = parallel (imagenes, versionWebp, versionAvif, dev, javascript);