const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
        'resources/css/app.css'
    ], 'public/css/app.css')

    .scripts([
        'resources/js/validaNovaVaga.js',
        'resources/js/validaCandidato.js'
    ], 'public/js/scripts.js')

    .version();

