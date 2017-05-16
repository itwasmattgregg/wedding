const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .copy('node_modules/photoswipe/dist/photoswipe.min.js', 'public/js/photoswipe.min.js')
   .copy('node_modules/photoswipe/dist/photoswipe-ui-default.min.js', 'public/js/photoswipe-ui-default.min.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync('wedding.dev');
