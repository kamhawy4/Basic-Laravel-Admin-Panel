@extends('admin.layout')
@section("title")
Dashboard
@endsection
@section("content")


<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="{{isset($user)?$user:0}}">{{isset($user)?$user:0}}</span>
                    </h3>
                    <small>Number of Users</small>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
             <div class="progress-info">
                <div class="progress">
                     <span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
                         <span class="sr-only">Number of Users</span>
                    </span>
                </div>
                <div class="status">
                    <a  style="text-decoration:none;color: #f36a5a;" href="{{url('/')}}/dashboard/users"> More </a>
                </div>
            </div>
        </div>
    </div>



</div>



@endsection




