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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
mix.postCss('resources/css/test.css', 'public/css');
mix.js('resources/js/test.js', 'public/js');
// mix.js("resources/js/jquery.nice-select.min.js","public/js")
//     .js("resources/js/jquery.slicknav.js","public/js")
//     .js("resources/js/jquery-3.3.1.min.js","public/js")
//     .js("resources/js/main.js","public/js")
//     .js("resources/js/mixitup.min.js","public/js")
//     .js("resources/js/owl.carousel.min.js","public/js");
// .js("resources/js/jquery-ui.min.js","public/js")
// mix.postCss('resources/css/bootstrap.min.css', 'public/css')
//     .postCss('resources/css/elegant-icons.css', 'public/css')
//     .postCss('resources/css/font-awesome.min.css', 'public/css')
//     .postCss('resources/css/nice-select.css', 'public/css')
//     .postCss('resources/css/style.css', 'public/css');
// .postCss('resources/css/jquery-ui.min.css', 'public/css')
//    .postCss('resources/css/owl.carousel.min.css', 'public/css')
// mix.sass('resources/sass/*.scss', 'public/css');
