let mix = require('laravel-mix');

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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles(['resources/assets/css/bootstrap.min.css',
   	'resources/assets/css/font-awesome.min.css',
   	'resources/assets/css/AdminLTE.min.css',
   	'resources/assets/css/_all-skins.min.css',
   	'resources/assets/css/blue.css',
	'resources/assets/css/ionicons.min.css'], 'public/css/all.css')
   .scripts(['resources/assets/scripts/jquery.min.js',
   	'resources/assets/scripts/jquery-ui.min.js',
   	'resources/assets/scripts/bootstrap.min.js',
   	'resources/assets/scripts/adminlte.min.js',
   	'resources/assets/scripts/dashboard.js',
   	'resources/assets/scripts/demo.js'], 'public/js/all.js');
