<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .nav {
        list-style: none;
        padding: 0;
        display: flex;
    }

    .nav li {
        margin-right: 15px;
    }

    .nav-link {
        text-decoration: none;
        color: #333;
    }

    .nav-link.active {
        font-weight: bold;
        color: #007bff;
    }
    .header-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333; /* Adjust the color as needed */
        }

        .header-link p {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 0.5rem;
        }

        .header-link span {
            margin-left: 1rem;
            font-size: 1.5rem;
            color: #777; /* Adjust the color as needed */
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <a href="{{route('dashboard.home')}}" class="header-link">
                            <p>School Management System</p>
                            <span><i class="fa fa-reply" aria-hidden="true"></i></span>
                        </a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- <li><a class="nav-link {{ Route::currentRouteName() === 'dashboard.home' ? 'active' : '' }}" href="{{ route('dashboard.home') }}">Home</a></li> --}}
                            <li><a class="nav-link {{ Route::currentRouteName() === 'super-admin.users.index' ? 'active' : '' }}" href="{{ route('super-admin.users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link {{ Route::currentRouteName() === 'super-admin.roles.index' ? 'active' : '' }}" href="{{ route('super-admin.roles.index') }}">Manage Role</a></li>
                            {{-- <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>  
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    <script>
        var milliseconds = 900;
      
        setTimeout(function () {
            document.querySelector('.alert').remove();
        }, milliseconds);
      </script>
      
</body>
</html>
