let mix = require('laravel-mix');

mix.js('front-end/js/app.js', 'public/js')
    .sass('front-end/css/app.scss', 'public/css')
    .sourceMaps();