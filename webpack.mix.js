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


mix.scripts([
    'node_modules/admin-lte/plugins/jquery/jquery.min.js',
    'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'node_modules/admin-lte/dist/js/adminlte.min.js'
], 'public/js/auth.js')
    .styles([
        'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css',
        'node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'node_modules/admin-lte/dist/css/adminlte.min.css'
    ], 'public/css/auth.css')
    .copyDirectory(['node_modules/admin-lte/plugins/fontawesome-free/webfonts'], 'public/webfonts/');
