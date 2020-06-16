@extends('layouts.app')

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello Admin'),
        'description' => __('This is an overview of the messages sent by clients. You can read all their messages here.'),
        'class' => 'col-lg-7'
    ]) 

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h1 class="mb-0">Overview of Messages</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive py-4">
                            <table class="table table-flush" id="datatable-basic">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th> 
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $cm)
                                        <tr>
                                            
                                            <td><p>{{$cm->name}}</p></td>
                                            <td><p>{{$cm->email}}</p></td>
                                            <td><p>{{$cm->message}}</p></td>
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






