<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Associação Beneficente MontePio dos Artífices">
  <meta name="description" content="">

  <link rel="stylesheet" href="{{url('/assets/extra-libs/c3/c3.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/libs/chartist/dist/chartist.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}">
  <link rel="stylesheet" href="{{url('/dist/css/style.min.css')}}">
  <link href="{{url('/assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

  <link rel="icon" href="{{url('images/favicon/favicon.png')}}" sizes="16x16">
  <link rel="icon" href="{{url('images/favicon/favicon-32.png')}}" sizes="32x32">
  <link rel="icon" href="{{url('images/favicon/favicon-48.png')}}" sizes="48x48">
  <link rel="icon" href="{{url('images/favicon/favicon-64.png')}}" sizes="64x64">
  <link rel="icon" href="{{url('images/favicon/favicon-128.png')}}" sizes="128x128">
  <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon"/>
  <link rel="apple-touch-icon" href="{{url('images/favicon/favicon-apple-144.png')}}" sizes="144x144">
  <link rel="apple-touch-icon" href="{{url('images/favicon/favicon-apple-114.png')}}" sizes="114x114">
  <link rel="apple-touch-icon" href="{{url('images/favicon/favicon-apple-72.png')}}" sizes="72x72">
  <link rel="apple-touch-icon" href="{{url('images/favicon/favicon-apple-57.png')}}" sizes="57x57">

  <title>Dashboard - @yield('title')</title>
</head>
<body>

  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
              <i class="ti-menu ti-close"></i>
            </a>
            <div class="navbar-brand">
            <a href="{{route('dashboard')}}">
              <h2>
                <img src="{{url('images/logo.png')}}" alt="ABMA LOGO" width="125px">
              </h2>
              </a>
            </div>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
            <h2>Dashboard</h2>
          </ul>
          <ul class="navbar-nav float-right">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link" href="javascript:void(0)">
                <form method="get" action="{{route('dashboard')}}">
                  <div class="customize-input">
                    <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Busca" aria-label="Search">
                    <i class="form-control-icon" data-feather="search"></i>
                  </div>
                </form>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="javascript:void(0)"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                  <span
                    class="ml-2 d-none d-lg-inline-block">
                    <span>
                      Olá,
                    </span>
                    <span
                      class="text-dark">
                      {{session('name')}}
                    </span>
                    <i
                      data-feather="chevron-down"
                      class="svg-icon">
                    </i>
                  </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i data-feather="user"
                    class="svg-icon mr-2 ml-1">
                  </i>
                  Meu perfil
                </a>
                <a class="dropdown-item" href="{{route('logout')}}">
                  <i
                    data-feather="power"
                    class="svg-icon mr-2 ml-1">
                  </i>
                  Desconectar
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
      <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                <i data-feather="home" class="feather-icon"></i>
                <span class="hide-menu">Início</span>
              </a>
            </li>
            <li class="list-divider"></li>
            <li class="nav-small-cap">
              <span class="hide-menu">Administrativo</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">
                  Funcionário
                </span>
              </a>
              <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item">
                  <a href="{{route('user.create')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Cadastrar funcionário
                    </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="{{route('user.index')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Listar funcionários
                    </span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a
                href="{{route('calendar')}}"
                class="sidebar-link sidebar-link"
                aria-expanded="false"
              >
                <i data-feather="calendar" class="feather-icon"></i>
                <span class="hide-menu">
                  Calendário
                </span>
              </a>
            </li>
            <li class="list-divider"></li>
            <li class="nav-small-cap">
              <span class="hide-menu">
                Financeiro
              </span>
            </li>
            <li class="sidebar-item">
              <a
                href="{{route('donate.list')}}"
                class="sidebar-link"
                aria-expanded="false"
              >
                <i data-feather="dollar-sign" class="feather-icon"></i>
                <span class="hide-menu">
                  Doações
                </span>
              </a>
            </li>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">
                  Despesas
                </span>
              </a>
              <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item">
                  <a href="{{route('category.create')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Cadastrar categoria
                    </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="{{route('category.index')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Listar categoria
                    </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="{{route('expense.create')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Cadastrar despesas
                    </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="{{route('expense.index')}}" class="sidebar-link">
                    <span class="hide-menu">
                      Listar despesas
                    </span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="list-divider"></li>
            <li class="nav-small-cap">
              <span class="hide-menu">Social</span>
            </li>
            <li class="sidebar-item">
              <a
                href="{{route('home')}}"
                class="sidebar-link sidebar-link"
                target="_blank"
                aria-expanded="false"
              >
                <i data-feather="mouse-pointer" class="feather-icon"></i>
                <span class="hide-menu">
                  Ver site
                </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                href="{{url('/dashboard/cursos')}}"
                class="sidebar-link sidebar"
                aria-expanded="false"
              >
                <i data-feather="book" class="feather-icon"></i>
                <span class="hide-menu">
                  Cursos
                </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                href="{{url('/dasboard/noticias')}}"
                class="sidebar-link sidebar-link"
                aria-expanded="false"
              >
                <i data-feather="sidebar" class="feather-icon"></i>
                <span class="hide-menu">
                  Notícias
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    @yield('content')
  </div>

  <script src="{{url('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{url('/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/dist/js/app-style-switcher.js')}}"></script>
  <script src="{{url('/dist/js/feather.min.js')}}"></script>
  <script src="{{url('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{url('/dist/js/sidebarmenu.js')}}"></script>
  <script src="{{url('/dist/js/custom.min.js')}}"></script>
  <script src="{{url('/assets/extra-libs/c3/d3.min.js')}}"></script>
  <script src="{{url('/assets/extra-libs/c3/c3.min.js')}}"></script>
  <script src="{{url('/assets/libs/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{url('/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{url('/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{url('/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{url('/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
  <script src="{{url('/assets/libs/moment/min/moment.min.js')}}"></script>
  <script src="{{url('/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
  <script src="{{url('/dist/js/pages/calendar/cal-init.js')}}"></script>
</body>
</html>
