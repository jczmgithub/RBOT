var mix = require('laravel-mix');

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

/* Default tasks
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
*/

mix.options({
    processCssUrls: false, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
    postCss: [
        require('autoprefixer')({
            browsers: ['last 3 versions'],
            cascade: false
        })
    ],
});

mix.sass('resources/assets/sass/user/home.scss', 'public/css/user')
    .sass('resources/assets/sass/layouts/nav.scss', 'public/css/layouts')
    .sass('resources/assets/sass/layouts/footer.scss', 'public/css/layouts')
    .sass('resources/assets/sass/home.scss', 'public/css')
    .sass('resources/assets/sass/rbot.scss', 'public/css');
