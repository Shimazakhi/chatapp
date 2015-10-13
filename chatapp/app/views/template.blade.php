<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Chatties</title>

    @include('assets.header-css-js')
  </head>


  <body>
  <section id="container">
    @include('template.header')

    @include('template.sidebar')

    @yield('content')
  </section>


   @include('assets.footer-js')


  </body>
</html>
