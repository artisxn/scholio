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
 .sass('resources/assets/sass/core.scss', 'public/css')
 .sass('resources/assets/sass/icons.scss', 'public/css');
// .sass('resources/assets/sass/responsive.scss', 'public/css')
// .sass('resources/assets/sass/bootstrap-select-min.scss', 'public/css');

     // mix.combine([
     //     'public/css/core.css',
     //     'public/css/icons.css',
     //     'public/css/responsive.css',
     //     'public/css/bootstrap-select-min.css'
     //     ], 'public/css/panel.css');

    // mix.sass('resources/assets/sass/steps.scss', 'public/css')
    //     .sass('resources/assets/sass/studies.scss', 'public/css');

    // mix.combine([
    //     'public/panel/assets/js/detect.js',
    //     'public/panel/assets/js/fastclick.js',
    //     'public/panel/assets/js/jquery.slimscroll.js',
    //     'public/panel/assets/js/jquery.core.js',
    //     'public/panel/assets/js/jquery.app.js'
    //     ], 'public/js/bold.js');
