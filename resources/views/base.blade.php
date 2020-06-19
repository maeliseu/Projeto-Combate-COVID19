<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto-Combate-COVID19</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="<?= asset("covid.png"); ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{(request()->segment(1) == '') ? 'active' : ''}}" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{(request()->segment(1) == 'casos') ? 'active' : ''}}" href="{{route('casos.index')}}">Casos</a></li>
                    <li class="nav-item"><a class="nav-link {{(request()->segment(1) == 'bairros') ? 'active' : ''}}" href="{{route('bairros.index')}}">Bairros</a></li>
              </ul>
            </div>
    </nav>
</header>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{asset('site/jquery.js')}}"></script>
  <script src="{{asset('site/bootstrap.js')}}"></script>
  @yield('scripts')
</body>
</html>