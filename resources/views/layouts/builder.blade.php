<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />
    <link href="/assets/css/customStyling.css" rel="stylesheet">
</head>

<body>
    <!-- start navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-dark">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="nav-link-inner--text">{{ __('WAPP4U') }}</span>
            </a>
            <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" (click)="sidebarToggle()">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('home') }}">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text">{{ __('Home') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('builder') }}">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text">{{ __('Builder') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- end navbar -->

    <div id="app">
        <builder-component></builder-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
