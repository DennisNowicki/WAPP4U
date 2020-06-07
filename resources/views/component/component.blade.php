@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your components page. You can edit the fees of your components and the amount of hours you need to make them.'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h1 class="mb-0">{{ __('Overview of Components') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive py-4">
                            <table class="table table-flush" id="datatable-basic">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Fee</th>
                                        <th>Min Hours</th>
                                        <th>Max Hours</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($components as $comp)
                                        <tr>
                                            <td style="font-size: 30px"><img style="max-width: 35px; height: auto; margin-right:20px" src=" assets/img/icons/{{$comp->path}}.png" alt="{{$comp->name}}">{{$comp->name}}</td>
                                            <td><input type="number" class="form-control" placeholder="{{$comp->fee}}"></td>
                                            <td><input type="number" class="form-control" placeholder="{{$comp->minHours}}"></td>
                                            <td><input type="number" class="form-control" placeholder="{{$comp->maxHours}}"></td>
                                            <td><a href="" class="btn btn-info">Update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

    
@endsection