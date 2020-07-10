@extends('master')

@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">Home</a> / <span>Admin Panel</span>
                </div>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
                <div class="row">
                    <div class="col-sm-3"></div>
                    
                    <div class="col-sm-6">
                        <h3>Admin Panel</h3>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            <a href="{{route('productsPanel')}}"><div>Products Management</div></a>
            <a href="{{route('usersPanel')}}"><div>Users Management</div></a>
             <a href="{{route('libraryPanel')}}"><div>Library Management</div></a>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection