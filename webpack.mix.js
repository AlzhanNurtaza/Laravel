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

mix
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss")
    ])
    .js('node_modules/jquery/dist/jquery.min.js', 'public/js')
    .sourceMaps()
    .js('node_modules/alpinejs/dist/cdn.min.js', 'public/js')
    .css('node_modules/@fortawesome/fontawesome-free/css/all.min.css/', 'public/css');

    mix.copy(['node_modules/@popperjs/core/dist/umd/popper.js','node_modules/@popperjs/core/dist/umd/popper.js.map'], 'public/js');