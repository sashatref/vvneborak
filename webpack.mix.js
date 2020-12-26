const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/js/bootstrap.bundle.min.js', 'public/js')
    .copy('resources/js/jquery-3.5.1.slim.min.js', 'public/js')
    .copy('resources/js/ekko-lightbox.min.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css', [ ])
    .copy('resources/css/bootstrap-4.5.3-dist/bootstrap.min.css', 'public/css')
    .copy('resources/css/ekko-lightbox.css', 'public/css');
