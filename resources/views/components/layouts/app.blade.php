<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Charme Jóias' }}</title>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="template/media/favicon.png">

        <!-- Dependency Styles -->
        <link rel="stylesheet" href="template/libs/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="template/libs/feather-font/css/iconfont.css" type="text/css">
        <link rel="stylesheet" href="template/libs/icomoon-font/css/icomoon.css" type="text/css">
        <link rel="stylesheet" href="template/libs/font-awesome/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="template/libs/wpbingofont/css/wpbingofont.css" type="text/css">
        <link rel="stylesheet" href="template/libs/elegant-icons/css/elegant.css" type="text/css">
        <link rel="stylesheet" href="template/libs/slick/css/slick.css" type="text/css">
        <link rel="stylesheet" href="template/libs/slick/css/slick-theme.css" type="text/css">
        <link rel="stylesheet" href="template/libs/mmenu/css/mmenu.min.css" type="text/css">
		<!-- <link rel="stylesheet" href="libs/slider/css/jslider.css"> -->
        @yield('css')
        
        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="template/assets/css/app.css" type="text/css">
        <link rel="stylesheet" href="template/assets/css/responsive.css" type="text/css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>

    <!-- Content Page -->
    {{ $slot }}

     <!-- Dependency Scripts -->
    <script src="template/libs/popper/js/popper.min.js"></script>
    <script src="template/libs/jquery/js/jquery.min.js"></script>
    <script src="template/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="template/libs/slick/js/slick.min.js"></script>
    <script src="template/libs/mmenu/js/jquery.mmenu.all.min.js"></script>
    @yield('js')

    <!-- Site Scripts -->
    <script src="template/assets/js/app.js"></script>
    @livewireScripts
</html>
