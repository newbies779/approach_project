<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bulma.css" rel="stylesheet" >
    <link href="/css/bulma1.css" rel="stylesheet" >
    <link href="/css/bulma2.css" rel="stylesheet" >
    
    <style>
        body, html {
            height: 100%;
            overflow: hidden;
        }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div class="flex-center position-ref full-height">
        {{-- @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif
 --}}
        <section class="hero is-primary is-fullheight header-image">
            <div class="hero-head">
                <header class="nav">
                    <div class="container">
                        <div class="nav-left">
                            <a class="nav-item" href="../index.html">
                                <img src="/images/bulma-white.png" alt="Logo">
                            </a>
                        </div>
                        <span class="nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            <a class="nav-item is-active" href="/home">
                                Home
                            </a>
                            <a class="nav-item">
                                Examples
                            </a>
                            <a class="nav-item">
                                Documentation
                            </a>
                            <span class="nav-item">
                                <a class="button is-info is-outlined is-inverted">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>Download</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </header>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title is-2">
                        Hero Heading
                    </h1>
                    <h2 class="subtitle is-5">
                        A hero description could go here.
                    </h2>
                    <p>
                        <a class="button is-outlined is-warning">
                            <span class="icon">
                                <i class="fa fa-github"></i> 
                            </span>
                            <span>
                                Download
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </section>
        

        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </div>
</body>
</html>
