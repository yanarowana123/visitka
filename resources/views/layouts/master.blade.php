<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png"/>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>


<body>
<div id="menu-item" class="menu-item hide-menu">
    <div class="container">
        <ul>
            <a href="index.html"><li>home</li></a>
            <a href="#about"><li>about</li></a>
            <a href="#expertise"><li>expertise</li></a>
            <a href="#workstation"><li>workstation</li></a>
            <a href="#team"><li>team</li></a>
            <a href="#contact"><li>contact</li></a>
            <a href="elements.html"><li>Elements</li></a>
        </ul>
    </div>
</div>

@yield('content')

<script src="assets/js/jquery-3.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/55b73bf748.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
