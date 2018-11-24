<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
  <header>
  </header>
    <main>
      @yield('content')
    </main>
  <footer>
  </footer>
</body>
</html>
