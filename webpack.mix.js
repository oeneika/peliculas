const mix = require('laravel-mix');

mix.styles([
	    'resources/plantilla/app-assets/css/bootstrap.css',
	    'resources/plantilla/app-assets/fonts/icomoon.css',
	    'resources/plantilla/app-assets/fonts/flag-icon-css/css/flag-icon.min.css',
	    'resources/plantilla/app-assets/vendors/css/extensions/pace.css',
	    'resources/plantilla/app-assets/css/bootstrap-extended.css',
	    'resources/plantilla/app-assets/css/app.css',
	    'resources/plantilla/app-assets/css/colors.css',
	    'resources/plantilla/app-assets/css/core/menu/menu-types/vertical-menu.css',
	    'resources/plantilla/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css',
	    'resources/plantilla/app-assets/css/core/colors/palette-gradient.css',
	    'resources/plantilla/assets/css/style.css'
], 'public/css/all.css')
.scripts([
	    'resources/plantilla/app-assets/js/core/libraries/jquery.min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/tether.min.js',
	    'resources/plantilla/app-assets/js/core/libraries/bootstrap.min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/unison.min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/blockUI.min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/jquery.matchHeight-min.js',
	    'resources/plantilla/app-assets/vendors/js/ui/screenfull.min.js',
	    'resources/plantilla/app-assets/vendors/js/extensions/pace.min.js',
	    'resources/plantilla/app-assets/vendors/js/charts/chart.min.js',
	    'resources/plantilla/app-assets/js/core/app-menu.js',
	    'resources/plantilla/app-assets/js/core/app.js',
	    'resources/plantilla/app-assets/js/scripts/pages/dashboard-lite.js'
], 'public/js/all.js')
.js(['resources/js/app.js'],'public/js/app.js');
