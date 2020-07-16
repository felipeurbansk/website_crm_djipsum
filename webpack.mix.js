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

mix
    .sass('resources/views/front/assets/sass/style.scss', 'public/front/assets/css/style.css')
    .styles([
        'resources/views/front/assets/css/bootstrap.min.css',
        'resources/views/front/assets/css/font-awesome.min.css',
        'resources/views/front/assets/css/barfiller.css',
        'resources/views/front/assets/css/nowfont.css',
        'resources/views/front/assets/css/rockville.css',
        'resources/views/front/assets/css/magnific-popup.css',
        'resources/views/front/assets/css/owl.carousel.min.css',
        'resources/views/front/assets/css/slicknav.min.css',
    ], 'public/front/assets/css/vendor.css')
    .scripts([
            'resources/views/front/assets/js/jquery-3.3.1.min.js',
            'resources/views/front/assets/js/bootstrap.min.js',
            'resources/views/front/assets/js/jquery.magnific-popup.min.js',
            'resources/views/front/assets/js/jquery.nicescroll.min.js',
            'resources/views/front/assets/js/jquery.barfiller.js',
            'resources/views/front/assets/js/jquery.countdown.min.js',
            'resources/views/front/assets/js/jquery.slicknav.js',
            'resources/views/front/assets/js/owl.carousel.min.js',
            'resources/views/front/assets/js/jquery.jplayer.min.js',
            'resources/views/front/assets/js/jplayerInit.js',
    ], 'public/front/assets/js/vendor.js')
    .scripts([
            'resources/views/front/assets/js/main.js',
    ], 'public/front/assets/js/main.js')

    .copyDirectory('resources/views/front/assets/fonts', 'public/front/assets/fonts')
    .copyDirectory('resources/views/front/assets/img', 'public/front/assets/img')
    .copyDirectory('resources/views/front/assets/music-files', 'public/music-files')

    .options({
        processCssUrls: false
    })

    .version();
