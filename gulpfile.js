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
 mix.less('app.less'); // Copile app.less (in resources) into css
 mix.less('ps.less');
 mix.scripts([
  'bower_components/typed.js/js/typed.js'
 ], 'public/js/app.js', 'bower_components/');
});
