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

<script>
$(document).ready(function(){
	$('delete_form').on('submit', function(){
		if(confirm("Are you sure you want to delete it?")){
			return true;
		} else {
			return false;
		}
	});
});
</script>

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
					<h3>Products Management</h3>
				</div>
				<br>
				@if($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{$message}}</p>
				</div>
				@endif

            </div>
			<table>
				<tr>
					<th scope="col">username</th>
					<th scope="col">Product_ID</th>
					<th scope="col">date</th>
					<th scope="col">Action</th>
				</tr>
				@foreach($lib as $row)
				  <tr>
				  	<td>{{$row->username}}</td>
					<td>{{$row->Product_ID}}</td>
					<td>{{$row->Date}}</td>

					<td>

						<form action="#" method="post" class="beta-form-checkout">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>

					</td>
				  </tr>
				@endforeach
		</table>


		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection