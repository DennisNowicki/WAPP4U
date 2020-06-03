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
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="{{ route('dashboard') }}">
                    <i class="ni ni-planet"></i>
                    <span class="nav-link-inner--text">{{ __('Dashboard') }}</span>
                </a>
            </li>
            </ul>
            <div class="my-2 my-md-0">
                @auth()
                    <button class="btn btn-outline-warning">Logout</button>
                @endauth
                    
                @guest()
                    <button class="btn btn-outline-primary">Login</button>
                @endguest
          </div>
        </div>
    </div>
</nav>
    <!-- end navbar -->

    <div class="container builder-container">
        <div class="row">

            <div class="col-md-12 col-lg-8">
                <h2>User Settings</h2>
                <hr>
                <br>

                <form id="test">
                    <div class="form-group">
                        <label for="usageType">Application usage</label>
                        <select id="usageType" class="form-control">
                            <option>Static display of media (informative)</option>
                            <option>Dynamic display of media (informative and/or entertainment)</option>
                            <option>E-commerce</option>
                            <option>Web portal (forum/social media)</option>
                            <option>CMS based website</option>
                        </select><br>

                        <label for="pagesCount">How many pages do you want?</label><br>
                        <input style="text-align: center;" type="number">

                        <br><br>
                        <label for="description">Please describe your idea</label>
                        <textarea name="description" placeholder="Description" id="description" class="form-control"
                            rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary">Next</button>
                    
                    <br>
                    <br>
                </form>

                <form>
                    <div class="form-group d-flex flex-wrap">
                        <a class="component-anchor">
                            <div class="card" style="width: 11rem;">
                                <div class="card-body text-center center">
                                    <p class="component-name"></p>
                                    <img src="" class="component-icon" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <button class="btn btn-primary">Previous</button>
                    <button class="btn btn-primary float-right">Next</button><br><br>
                </form>
            </div>

            <div class="col-md-12 col-lg-4" style="background-color: g;">
                <div class="card overview-card" style="max-width: 42rem;">
                    <div class="card-header">
                        Overview of application
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        </li>
                    </ul>
                </div>

                <br>
                <br>

                <div class="card overview-card" style="max-width: 42rem;">
                    <div class="card-header">
                        Overview of selected items
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="" class="card-icon" alt="">
                            <button class="btn btn-outline-danger btn-sm btn-just-icon erase">X</button>
                        </li>
                    </ul>
                </div>
                <br>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div>
                    <div class="container">
                        <h2>Overview of selected items:</h2>
                        <hr>
                        <h4>Selected Webapplication <button style="float: right;"
                                class="btn btn-primary">Change</button></h4>
                        <br>
                        <ul>
                            <li style="font-size: 16px;"></li>
                        </ul>
                        <h4>Selected Components <button style="float: right;" class="btn btn-primary">Change</button>
                        </h4> <br>
                        <ul>
                            <li style="font-size: 16px;">
                                <img src="" class="card-icon" alt="">
                            </li>
                        </ul>
                    </div>
                </div>

                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" #name>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="nc-icon nc-email-85"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea class="form-control" rows="4" placeholder="What can we help you with?"></textarea>
                    <div class="row">
                        <div class="col-12">
                            <button style="display: block; margin-left: auto; margin-right: auto;"
                                class="btn btn-primary btn-lg btn-fill">Submit request</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</body>
</html>
