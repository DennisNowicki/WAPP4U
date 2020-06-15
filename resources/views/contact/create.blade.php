<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="/assets/demo/demo.css" rel="stylesheet" />
        
        <style> 
       

            body { 
            padding-top: 90px;
            padding-bottom: 150px;
            
                }
            .footerdown{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                
            }
            
        </style>
        
    </head> 
    <body>

     <!-- start navbar -->
 <nav class="navbar navbar-expand-lg fixed-top bg-dark">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span class="nav-link-inner--text" style="font-size: 30px">{{ __('WAPP4U') }}</span>
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
                        <span class="nav-link-inner--text" style="font-size: 18px">{{ __('Home') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('builder') }}">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text" style="font-size: 18px">{{ __('Builder') }}</span>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ ('contact') }}">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text" style="font-size: 18px">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- end navbar -->

    <div class="container">
        <div class="col-md-12 col-lg-12 mt-5">
        
            <h2>Contact Us</h2>
            <hr>
        
        <h5 class="text-left title">Got a question? We'd love to hear from you. Fill in this form and we'll get in touch asap!</h5>
        </div>
    
    @if(session()->has('message'))
    <div class="alert alert-success" role="alert" style="color: black">
        <strong>Succes!</strong>  {{ session()->get('message')}}
      </div>
    @endif

    <div class="container">
    <form action="/contact" method="POST">
        <div class="form-group">
            <div class="col-md">
            <label for="name">Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                </div>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" (focus)="focus=true" (blur)="focus=false">
            <div>{{ $errors->first('name') }}
            </div>
        </div>
    </div>
        </div>

        <div class="form-group">
            <div class="col-md">
            <label for="email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">  <i class="nc-icon nc-email-85"></i></span>
                </div>
            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            <div>{{ $errors->first('email') }}
            </div>
        </div>
            </div>

        <div class="form-group">
            <div class="col-md">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"
                      class="form-control" placeholder="What can we help you with?">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
</div>


</body>


<!-- footer -->
<footer class="footer bg-dark footerdown">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                      <a>Home</a>
                    </li>
                    <li>
                    <a>builder</a>
                    </li>
                    <li>
                      <a>Contact</a>
                      </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright" >
                    © 2020, made by Brecht, Dennis and Youssef
                </span>
            </div>
        </div>
    </div>
  </footer>

</html>
    
