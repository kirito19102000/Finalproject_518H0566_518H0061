@extends('master')

@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Admin Panel</span> / <span>Admin Panel</span>
				</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th {
  border-top: 1px solid #00ae4d;
  border-bottom: 1px solid #00ae4d;
  text-align: left;
  padding: 8px;
}

td{
  border-bottom: 1px solid #00ae4d;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}
</style>
	<div class="container">
		<div id="content">
				<div class="row">    
					<h3>Users Management</h3>
				</div>
				<br>
				@if($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{$message}}</p>
				</div>
				@endif
			<table>
				<tr>
					<th scope="col">id</th>
					<th scope="col">Username</th>
					<th scope="col">Full Name</th>
					<th scope="col">Actions</th>
				</tr>
				@foreach($users as $user)
				  <tr>
				  	<td>{{$user->id}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->fullname}}</td>
					<td>

						<a href="{{route('usersDelete', $user->username)}}"><button type="button" class="btn btn-danger">Delete</button></a>
					</td>
				  </tr>
				@endforeach
		</table>


		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection