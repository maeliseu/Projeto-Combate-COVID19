<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto-Combate-COVID19</title>
  <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}" />
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>