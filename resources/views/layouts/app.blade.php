<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bulma.css" rel="stylesheet" >
    <link href="/css/bulma1.css" rel="stylesheet" >
    <link href="/css/bulma2.css" rel="stylesheet" >
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    {{-- Nav Area --}}
    <div class="container is-hidden-mobile">
        <div class="nav-left">
            <a class="nav-item">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
            </a>
        </div>
    </div>

    <nav class="nav has-shadow" id="top-nav">
        <div class="container">

            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <a class="nav-item is-hidden-tablet">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
            </a>

            <div class="nav-left">
                <a class="nav-item is-tab is-hidden-mobile is-active">Home</a>
                <a class="nav-item is-tab is-hidden-mobile">Features</a>
                <a class="nav-item is-tab is-hidden-mobile">Pricing</a>
                <a class="nav-item is-tab is-hidden-mobile">About</a>
            </div>

            <div class="nav-right nav-menu is-hidden-tablet ">
                <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
                <a class="nav-item is-tab is-hidden-tablet">Features</a>
                <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
                <a class="nav-item is-tab is-hidden-tablet">About</a>
            </div>

            <div class="nav-right">
                <a class="nav-item is-tab is-hidden-mobile">
                    <figure class="image is-16x16" style="margin-right: 8px;">
                        <img src="http://bulma.io/images/jgthms.png">
                    </figure>
                    Profile
                </a>
                <a class="nav-item is-tab is-hidden-mobile">Log out</a>
            </div>
        </div>
    </nav>


    {{-- App Area --}}
    <div id="app">
        @yield('content')
    </div>
    

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.js"></script>

    @yield('script')

</body>
</html>
