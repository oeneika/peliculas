<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Peliculas</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../resources/plantilla/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../resources/plantilla/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../resources/plantilla/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../resources/plantilla/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/free-bootstrap-template/robust-lite/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../resources/plantilla/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="../resources/plantilla/app-assets/vendors/select2/select2.min.css">

  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
    <div id="app">
        @include('layouts.header')

        <!-- ////////////////////////////////////////////////////////////////////////////-->

        @include('layouts.menu')

        <!-- ////////////////////////////////////////////////////////////////////////////-->

        <div class="app-content content container-fluid">
          <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
              @yield('content')
            </div>
          </div>
        </div>

        <!-- ////////////////////////////////////////////////////////////////////////////-->

        @include('layouts.footer')
    </div>


    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/all.js" type="text/javascript"></script>
    <script src="../resources/plantilla/app-assets/vendors/select2/select2.min.js" type="text/javascript"></script>
  </body>

</html>
