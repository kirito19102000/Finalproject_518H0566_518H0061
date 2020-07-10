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
				<div align="right">
                    <a href="{{route('product.create')}}"><button type="button" class="btn btn-warning">Add</button></a>
                </div>
            </div>
			<table>
				<tr>
					<th scope="col">Prodctu_ID</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Product Type</th>
					<th scope="col">Unit Price</th>
					<th scope="col">Promotion Price</th>
					<th scope="col">Image</th>
					<th scope="col">Link</th>
					<th scope="col">Actions</th>
				</tr>
				@foreach($products as $row)
				  <tr>
				  	<td>{{$row['id']}}</td>
					<td>{{$row['Name']}}</td>
					<td>{{$row['description']}}</td>
					<td>{{$row['ID_type']}}</td>
					<td>{{$row['unit_price']}}</td>
					<td>{{$row['promotion_price']}}</td>
					<td>{{$row['image']}}</td>
					<td>{{$row['link']}}</td>
					<td>
						<a href="{{action('Admin\ProductController@edit', $row['id'])}}"><button type="button" class="btn btn-primary">Edit</button></a>
						<form method="POST" class="delete_form" action="{{action('Admin\ProductController@destroy', $row['id'])}}">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE"/>
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>

					</td>
				  </tr>
				@endforeach
		</table>


		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection