<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GBI Pahlawan | Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <div class="d-flex">
                <img class="img-circle mr-3" width="50" src="{{asset('images/logo-gbi.png')}}">
                <a class="navbar-brand bg-dark" href="#" style="box-shadow:none !important;">GBI Pahlawan</a>
            </div>
            
    
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is(['home*','schedule*'])) ? 'active' : '' }}" aria-current="page" href="{{route('schedule')}}">
                                <span data-feather="calendar"></span>
                                Jadwal Ibadah
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('news*')) ? 'active' : '' }}" href="{{route('news')}}">
                                <span data-feather="speaker"></span>
                                Pengumuman
                                </a>
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link {{ (request()->is('sermon*')) ? 'active' : '' }}" href="{{route('sermon')}}">
                                <span data-feather="book"></span>
                                Khotbah
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('galleries*')) ? 'active' : '' }}" href="{{route('galleries')}}">
                                <span data-feather="image"></span>
                                Gallery
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script></script><script src="{{asset('js/dashboard.js')}}"></script>
