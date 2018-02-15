let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By defaumainlt, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/main.scss', 'public/css');

//main js
mix.scripts([
    'resources/assets/plugins/jquery/jquery-v3.2.1.min.js',
    'resources/assets/plugins/bootstrap/js/bootstrap.js'
], 'public/js/libscripts.bundle.js');

//coman js
mix.scripts([
    'resources/assets/plugins/jquery-slimscroll/jquery.slimscroll.js',
    'resources/assets/plugins/node-waves/waves.js'
], 'public/js/vendorscripts.bundle.js');


//coman js
mix.scripts([
    'resources/assets/plugins/morphingsearch/morphingsearch.js',
    'resources/assets/js/morphing.js'
], 'public/js/morphingsearchscripts.bundle.js');

//coman js
mix.scripts([
    'resources/assets/js/admin.js',
    'resources/assets/js/demo.js'
], 'public/js/mainscripts.bundle.js');

//* Flot Chart js*/
mix.scripts([
    'resources/assets/plugins/flot-charts/jquery.flot.js',
    'resources/assets/plugins/flot-charts/jquery.flot.resize.js',
    'resources/assets/plugins/flot-charts/jquery.flot.pie.js',
    'resources/assets/plugins/flot-charts/jquery.flot.categories.js',
    'resources/assets/plugins/flot-charts/jquery.flot.time.js'
], 'public/js/flotscripts.bundle.js');

///* ChartJs js*/
mix.scripts([
    'resources/assets/plugins/chartjs/Chart.bundle.js'
], 'public/js/chartscripts.bundle.js');

///* Jquery DataTable Plugin Js  */
mix.scripts([
    'resources/assets/plugins/jquery-datatable/jquery.dataTables.min.js',
    'resources/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.js'
], 'public/js/datatablescripts.bundle.js');

///* Jquery DataTable Plugin 2 Js  */
mix.scripts([
     'resources/assets/plugins/jquery-datatable/jquery.dataTables.min.js',
     'resources/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.js',
     'resources/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js',

     'resources/assets/js/pages/tables/jquery-datatable.js'

], 'public/js/datatablescriptsplus.bundle.js');



//* Morris Plugin Js*/
mix.scripts([
    'resources/assets/plugins/raphael/raphael.min.js',
    'assets/plugins/morrisjs/morris.js'
], 'public/js/morrisscripts.bundle.js');

//* Morris Plugin Js */
mix.scripts([
    'resources/assets/plugins/flot-charts/jquery.flot.js',
    'resources/assets/plugins/flot-charts/jquery.flot.resize.js',
    'resources/assets/plugins/flot-charts/jquery.flot.pie.js',
    'resources/assets/plugins/flot-charts/jquery.flot.categories.js',
    'resources/assets/plugins/flot-charts/jquery.flot.time.js'
], 'public/js/flotchartsscripts.bundle.js');

// /* calender page js */
mix.scripts([
    'resources/assets/plugins/fullcalendar/lib/moment.min.js',
    'resources/assets/plugins/fullcalendar/lib/jquery-ui.custom.min.js',
    'resources/assets/plugins/fullcalendar/fullcalendar.min.js'

], 'public/js/flotchartsscripts.bundle.js');
/* JVectorMap Plugin Js */
mix.scripts([
    'resources/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'resources/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'
], 'public/js/jvectormapscripts.bundle.js');


//editor ACE
mix.scripts([
    'resources/assets/plugins/ace/ace.js'
], 'public/js/ace/ace.js');
mix.scripts([
    'resources/assets/plugins/ace/theme-eclipse.js'
], 'public/js/ace/theme-eclipse.js');

mix.scripts([
    'resources/assets/plugins/ace/mode-python.js'
], 'public/js/ace/mode-python.js');
