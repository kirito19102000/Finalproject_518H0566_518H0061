@extends('master')
@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{route('Home')}}">Home</a> / <span>Log in</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <form action="{{route('login')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="col-sm-6">
                        <h3>Log in</h3>
                        <div class="space20">&nbsp;</div>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="username">Username</label>
                            <input type="text" name="username" required>
                        </div>
                        <div class="form-block">
                            <label for="password">Password</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection