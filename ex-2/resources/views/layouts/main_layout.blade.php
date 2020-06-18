<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omini - Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/js/app.js" charset="utf-8"></script>
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
