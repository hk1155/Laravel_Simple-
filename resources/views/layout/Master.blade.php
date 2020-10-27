<html>

<head>
    <title>My First Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">My Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    @if(Session::get('loginstatus'))
                    <li class="nav-item">
                        <a class="nav-link">Welcome | {{Session::get('loginstatus')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mylogin">Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/mylogin">My Login <span class="sr-only">(current)</span></a>
                    </li>


                    @endif

                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('display') }}">View Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/addemp">Employee Registration</a>
                    </li>
                    @endauth
                    @endif
                </ul>
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

                        @else


                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register')) -->
                        <a href="{{ route('register') }}">Register</a>
                        <!-- @endif -->


                        @endauth
                    </div>
                    @endif

                </div>
            </div>
        </nav>

    </header>
    <div class="container-fluid">
        @yield('content')

    </div>
    <footer>
        <center>
            &copy; 2020 Hk
        </center>
    </footer>
</body>

</html>