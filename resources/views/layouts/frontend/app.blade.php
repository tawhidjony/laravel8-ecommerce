<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 8 ecommerce</title>
        <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
    <style>
        i.fas.fa-shopping-cart {
            background: #ffffff;
            padding: .5rem;
            border-radius: 50px;
            font-size: 1rem;
            color: #555555;
            position: relative;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
            border: 1px solid #ddd;
        }

        span.badge.badge-danger.ml-1 {
            position: absolute;
            top: -20%;
            right: -15%;
            border-radius: 50px;
            padding: .2rem;
        }
    </style>
    @notify_css
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow py-3">
    <a class="navbar-brand" href="{{url('/')}}">Laravel 8 Ecommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="my-2 my-lg-0 w-75">
            <div class="d-flex">
                <input class="form-control shadow-sm" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light my-2 my-sm-0 ml-1 shadow-sm" type="submit">Search</button>
            </div>
        </form>
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('cart.index')}}">
                    <i class="fas fa-shopping-cart">
                    <span class="badge badge-danger ml-1">{{Cart::count()}}</span>
                    </i>
                </a>
            </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" >
                        <img src="https://e7.pngegg.com/pngimages/798/436/png-clipart-computer-icons-user-profile-avatar-profile-heroes-black.png" alt="" style="width: 2rem; height:2rem;" />
                    </a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://e7.pngegg.com/pngimages/798/436/png-clipart-computer-icons-user-profile-avatar-profile-heroes-black.png" alt="" style="width: 2rem; height:2rem;" />
                        {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('dashboard.index')}}">Dashboard</a>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                @endguest


        </ul>
    </div>
</nav>

    <main>
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>
    @stack('js')
    @notify_js
    @notify_render
</body>
</html>
