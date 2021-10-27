const mix = require('laravel-mix');

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

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/bootstrap4/app.scss', 'public/css')
    //backend start
    .sass('resources/sass/backend/backend-main.scss', 'public/css')
    .styles([
    ], 'public/css/backend-all-plugin.css')
    .scripts([
        "public/assets/backend/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js",
        "public/assets/backend/js/plugins.js",
        "public/assets/backend/js/main.js",
    ], 'public/js/backend-all-plugin.js');

