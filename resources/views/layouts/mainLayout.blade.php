<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel - Cagnolini</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('components.header')

    @yield('content')

    @include('components.footer')
  </body>
</html>
