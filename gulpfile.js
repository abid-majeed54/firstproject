var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .styles([
            'libs/bootstrap.min.css',
            'libs/font-awesome.min.css',
            'libs/morris.css',
            'libs/sb-admin.css'
        ],'./public/css/libs.css')

        .scripts([

            'libs/jquery.js',
            'libs/scripts.js',
            'libs/bootstrap.min.js'

        ], './public/js/libs.js')
});

