const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

/*
    Compile sass for home page
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/home.scss', 'public/css')
    .options({
        processCssUrls:false,
        postCss:[tailwindcss('./tailwind.config.js')],
    });

/*
    Compile sass for about page
 */

mix.sass('resources/sass/about.scss','public/css')
    .options({
        processCssUrls:false,
        postCss:[tailwindcss('./tailwind.config.js')],
    });

/*
    Compile sass for services page
 */

mix.sass('resources/sass/services.scss','public/css')
    .options({
        processCssUrls:false,
        postCss:[tailwindcss('./tailwind.config.js')],
    });

/*
    Compile sass for contacts page
 */


mix.sass('resources/sass/contactUs.scss','public/css')
    .options({
        processCssUrls:false,
        postCss:[tailwindcss('./tailwind.config.js')],
    });
