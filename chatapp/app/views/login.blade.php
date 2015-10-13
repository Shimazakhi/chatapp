<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Chattie</title>

    <link rel="shortcut icon" href="{{URL::to('assets/img/favicon/fav.ico')}}" type="icon">
    <link href="{{URL::to('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{URL::to('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/css/custom.css')}}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="{{URL::to('assets/js/jquery.js')}}"></script>
    <script src="{{URL::to('assets/js/bootstrap.min.js"')}}"></script>

  </head>

  <body>
  <figure class="tint">
<video id="loginVideo" poster="{{URL::to('assets/video/bg.JPG')}}" autoplay="autoplay" src="{{URL::to('assets/video/videobg.webm')}}" loop="true"></video>
</figure>

@yield('content')






  </body>
</html>
