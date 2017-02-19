var elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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
var jsPlugins = [
    '../dep/jquery/dist/jquery.min.js'
];

var cssPlugins = [
    '../dep/bootstrap/dist/css/bootstrap.min.css'
];

elixir(function(mix){
	mix.scripts(jsPlugins,'public/admin/js/dep.js');
	mix.styles(cssPlugins,'public/admin/css/dep.css');
});
