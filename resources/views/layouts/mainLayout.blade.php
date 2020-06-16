<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel - Cagnolini</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('components.header')
    <main>
      @yield('content')
    </main>

    @include('components.footer')
  </body>
</html>
