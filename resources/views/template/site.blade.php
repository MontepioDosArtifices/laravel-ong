<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Associação Beneficente MontePio dos Artífices">
  <meta name="description" content="">

  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('css/animate.css') }}">
  <link rel="stylesheet" href="{{ url('css/structure.css') }}">
  <link rel="stylesheet" href="{{ url('css/slick.css') }}">
  <link rel="stylesheet" href="{{ url('css/main.css') }}">
  <link id="preset" rel="stylesheet" href="{{ url('css/preset1.css') }}">
  <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
  <link rel="stylesheet" href="{{ url('css/donation.css') }}">

  <link rel="icon" href="{{ url('images/favicon/favicon.png') }}" sizes="16x16">
  <link rel="icon" href="{{ url('images/favicon/favicon-32.png') }}" sizes="32x32">
  <link rel="icon" href="{{ url('images/favicon/favicon-48.png') }}" sizes="48x48">
  <link rel="icon" href="{{ url('images/favicon/favicon-64.png') }}" sizes="64x64">
  <link rel="icon" href="{{ url('images/favicon/favicon-128.png') }}" sizes="128x128">
  <link rel="shortcut icon" href="favicon.ico" type="{{ url('image/x-icon') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/favicon/favicon-apple-144.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/favicon/favicon-apple-114.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/favicon/favicon-apple-72.png') }}">
  <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images/favicon/favicon-apple-57.png') }}">

  <title>Associação MontePio dos Artífices</title>
</head>

<body>
  <div class="tr-menu">
    <nav id="tr_navbar" class="navbar fixed-top navbar-expand-lg slideDown">
      <div class="container">
        <a class="navbar-brand" href="{{ route('site') }}">
          <img src="{{ url('images/logo.png') }}" style="width: 150px;" alt="MontePio dos Artífices">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li><a href="{{ route('site') }}">Início</a></li>
            <li><a href="#service">Serviços</a></li>
            <li><a href="#causes">Causas</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#courses">Cursos</a></li>
            <li><a href="#blog">Notícias</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="{{ route('donation.form') }}">Doar</a></li>
          </ul>
        </div>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
  </div><!-- /.tr-menu -->

  @yield('content')

  <div class="tr-footer">
    <div class="footer-bottom">
      <div class="container">
        <div class="copyright">
          <span>
            Todos direitos reservados 2019 ©
            <a href="#">Sociedade Montepio dos Artífices</a>
          </span>
        </div>
        <div class="footer-social">
          <ul class="global-list">
            <li>
              <a href="{{ route('user.login') }}">
                Area restrita
                <i class="fa fa-lock" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
  </div><!-- /.tr-footer -->

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/jquery.nav.js') }}"></script>
  <script src="{{ url('js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ url('js/magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/counterup.min.js') }}"></script>
  <script src="{{ url('js/inview.min.js') }}"></script>
  <script src="{{ url('js/waypoints.min.js') }}"></script>
  <script src="{{ url('js/slick.min.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>
  <script src="{{ url('js/fontawesome.js') }}"></script>
</body>
</html>
