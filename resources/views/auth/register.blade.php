@extends('master')
@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{route('Home')}}">Home</a> / <span>Registration</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="container">
        <div id="content">
            
            <form action="{{route('register')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    
                    @if(Session::has('successful'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <div class="col-sm-6">
                        <h3>Registration</h3>
                        <div class="space20">&nbsp;</div>
                        <div class="space20">&nbsp;</div>
                        <div class="form-block">
                            <label for="username">Username</label>
                            <input type="text" name="username">
                        </div>

                        <div class="form-block">
                            <label for="your_last_name">Full name</label>
                            <input type="text" id="your_last_name" name="fullname" required>
                        </div>

                        <div class="form-block">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" required>
                        </div>

                        <div class="form-block">
                            <label for="phone">Password</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Re-enter password</label>
                            <input type="password" name="re_enter" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection