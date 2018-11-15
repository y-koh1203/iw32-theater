<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/html5reset-1.6.1.css') }}" rel="stylesheet">
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
