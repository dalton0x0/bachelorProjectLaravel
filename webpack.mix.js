const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/custom.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/custom.css', 'public/css')
    .setPublicPath('public');
