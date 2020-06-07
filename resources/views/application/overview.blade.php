@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h1 class="mb-0">{{ __('Overview of Applications') }}</h1>
                            </div>
                            
                            <div class="col-6">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="progress-label">
                                            <span>Total number of applications completed: {{count($finished)}}/{{count($applications)}}</span>
                                        </div>
                                        <div class="progress-percentage">
                                            <span>{{round(count($finished)/count($applications)*100, 2)}}%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{round(count($finished)/count($applications)*100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{round(count($finished)/count($applications)*100, 2)}}%;"></div>
                                    </div>
                                  </div>
                            
                            </div>
                                
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            @foreach ($applications as $app)
                                <div class="card">
                                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{$app->id}}" aria-expanded="false" aria-controls="collapseOne">
                                        @if ($app->finished)
                                            <h2>{{$app->name}} <i class="ni ni-check-bold text-success float-right" style="font-size: 50px"> </i></h2>
                                            <h5>{{$app->email}}</h5>
                                        @else
                                            <h2 class="text-danger">{{$app->name}} <i class="ni ni-fat-remove float-right" style="font-size: 50px"> </i></h2>
                                            <h5 class="text-danger">{{$app->email}}</h5>
                                        @endif
                                        
                                    </div>
                                    <div id="collapse{{$app->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body Gray300">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    @if (!$app->finished)
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <a href="" class="btn btn-primary float-right">Finish</a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center; border-right: 1px solid black">
                                                        <h3>Application Type</h3><br>
                                                        <span >
                                                            {{$app->applicationType}}
                                                        </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center; border: 1px 0px solid black">
                                                        <h3>Description</h3><br>
                                                        <span >
                                                            {{$app->applicationDescription}}
                                                        </span>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center; border-left: 1px solid black">
                                                        <h3>Pages: {{$app->pageCount}}</h3><br>
                                                        <span >
                                                            {{$app->pageName}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12" style="text-align: center;">
                                                        <h3>Message</h3><br>
                                                        <span >
                                                            {{$app->message}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/admin_panel.png" alt="Admin panel">
                                                        <h3 style="text-align: center">Admin panel</h3>
                                                        
                                                        @if ($app->adminBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/calender_ico.png" alt="Calendar">
                                                        <h3 style="text-align: center">Calendar</h3>
                                                        
                                                        @if ($app->calendarBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/cart_ico.png" alt="Shopping cart">
                                                        <h3 style="text-align: center">Shopping cart</h3>
                                                        
                                                        @if ($app->cartBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/chatbox_ico.png" alt="Chatbox">
                                                        <h3 style="text-align: center">Chatbox</h3>
                                                        
                                                        @if ($app->chatboxBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/database_ico.png" alt="Database">
                                                        <h3 style="text-align: center">Database</h3>
                                                        
                                                        @if ($app->databaseBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/geolocation_ico.png" alt="Geolocation">
                                                        <h3 style="text-align: center">Geolocation</h3>
                                                        
                                                        @if ($app->geolocationBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/language_support_ico.png" alt="Multilanguage">
                                                        <h3 style="text-align: center">Multilanguage</h3>
                                                        
                                                        @if ($app->multilanguageBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/login_system_ico.png" alt="Login Systems">
                                                        <h3 style="text-align: center">Login Systems</h3>
                                                        
                                                        @if ($app->loginBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/multimedia_integration_ico.png" alt="Media Support">
                                                        <h3 style="text-align: center">Media Support</h3>
                                                        
                                                        @if ($app->mediaBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 30px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/notification_ico.png" alt="Notifications">
                                                        <h3 style="text-align: center">Notifications</h3>
                                                        
                                                        @if ($app->notificationBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/payment_service_ico.png" alt="Payment Service">
                                                        <h4 style="text-align: center;">Payment Service</h4>
                                                        
                                                        @if ($app->paymentBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/statistics_ico.png" alt="Statistics">
                                                        <h3 style="text-align: center">Statistics</h3>
                                                        
                                                        @if ($app->statsBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/techsupport_ico.png" alt="Tech Support">
                                                        <h3 style="text-align: center">Tech Support</h3>
                                                        
                                                        @if ($app->supportBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/upload_capabilities_ico.png" alt="File Upload">
                                                        <h3 style="text-align: center">File Upload</h3>
                                                        
                                                        @if ($app->fileBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img style="max-width: 40px; height: auto; display: block; margin: 10px auto;" src="../argon/img/components/user_experience_ico.png" alt="User Experience">
                                                        <h3 style="text-align: center">User Experience</h3>
                                                        
                                                        @if ($app->userBoolean)
                                                            <i class="ni ni-check-bold text-success" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @else
                                                            <i class="ni ni-fat-remove text-danger" style="font-size: 70px; text-align: center; display: inline-block; width: 100%;"></i>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

    
@endsection