<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omini - Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include('components.header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include('components.footer')
    </footer>
  </body>
</html>
