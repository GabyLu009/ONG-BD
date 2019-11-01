<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ONG</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <link rel="stylesheet" href="{{asset("Plantilla/vendors/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("Plantilla/vendors/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("Plantilla/vendors/themify-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("Plantilla/vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("Plantilla/vendors/selectFX/css/cs-skin-elastic.css")}}">


    <link rel="stylesheet" href="{{asset("Plantilla/assets/css/style.css")}}">
    <link href='cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('styles')
</head>
<body>
    @include("Tema/aside")
    <div id="right-panel" class="right-panel">
        @include("Tema/head")
        <div class="content mt-3">
                @yield('content')
        </div>
    </div>
    <script src="{{asset("Plantilla/vendors/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("Plantilla/vendors/popper.js/dist/umd/popper.min.js")}}"></script>
    <script src="{{asset("Plantilla/vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("Plantilla/assets/js/main.js")}}"></script> 
   
@yield('scripts')
</body>
</html>
