<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WAPP4U
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
</head>

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
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->


<!--  title div -->
<div class="page-header" data-parallax="true" style="background-image: url('./assets/img/daniel-olahh.jpg');">
  <div class="filter"></div>
  <div class="container">
      <div class="motto text-center">
          <h1>WAPP4U</h1>
          <h3>Web applications for you</h3>
      </div>
  </div>
</div>


<!--  about us div -->
<div class="main">
  <div class="section text-center">
  <div class="container">
      <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
              <h2 class="title">About us</h2>
              <h5 class="description">WAPP4U is designed to part pick your own website for the best price available. You can choose each component individualy and are able to specify as much as you want!
                Already have a website but you want some changes? Don't you worry, you can contact us whenever you want for any change, be it minor or major!
              </h5>
              <br>
              <a href="/builder" class="btn btn-outline-primary btn-round" style="font-size: 25px">Go to builder</a>
          </div>
      </div>
      <br/><br/>
  </div>
</div>


<!--  our team div -->
<div class="section section-dark text-center">
  <div class="container">
      <h2 class="title">Our team</h2>
      <div class="row">
          <div class="col-md-4">
              <div class="card card-profile card-plain">
                  <div class="card-avatar">
                      <a href="#avatar"><img src="./assets/img/faces/clem-onojeghuo-3.jpg" alt="..."></a>
                  </div>
                  <div class="card-block">
                      <a href="#paper-kit">
                          <div class="author">
                              <h4 class="card-title">Youssef Khrichef</h4>
                              <h6 class="card-category">Designer</h6>
                          </div>
                      </a>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-github"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-profile card-plain">
                  <div class="card-avatar">
                      <a href="#avatar"><img src="./assets/img/faces/brecht_leben.jpg" alt="..."></a>
                  </div>
                  <div class="card-block">
                      <a href="#paper-kit">
                          <div class="author">
                              <h4 class="card-title">Brecht leben</h4>
                              <h6 class="card-category">Product manager</h6>
                          </div>
                      </a>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-github"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card card-profile card-plain">
                  <div class="card-avatar">
                      <a href="#avatar"><img src="./assets/img/faces/dennis_nowicki.jpg" alt="..."></a>
                  </div>
                  <div class="card-block">
                      <a href="#paper-kit">
                          <div class="author">
                              <h4 class="card-title">Dennis Nowicki</h4>
                              <h6 class="card-category">Developer</h6>
                          </div>
                      </a>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-github"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-primary"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<!--  questions div -->
<div class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto">
                <h2 class="text-center title">Questions?</h2>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" (focus)="focus=true" (blur)="focus=false" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">  <i class="nc-icon nc-email-85"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" (focus)="focus1=true" (blur)="focus1=false" >
                            </div>
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea class="form-control" rows="4" placeholder="What can we help you with?"></textarea>
                    <div class="row">
                        <div class="col-md-4 mr-auto ml-auto">
                            <button class="btn btn-primary btn-lg btn-fill">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

</body>
<!-- footer -->
<footer class="footer bg-dark">
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