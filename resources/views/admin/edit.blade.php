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

	<div class="container">
		<div id="content">
				<div class="row">    
					<h3>Edit product "{{$product->Name}}"</h3>
				</div>
				<br>
				@if(count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form action="{{action('Admin\ProductController@update', $id)}}" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PATCH"/>
					<div class="form-group">
						<input type="text" name="Name" class="form-control" value="{{$product->Name}}" placeholder="Enter product name" />
					</div>
					<div class="form-group">
						<input type="text" name="description" class="form-control" value="{{$product->description}}" placeholder="Enter description" />
					</div>
					<div class="form-group">
						<input type="text" name="ID_type" class="form-control" value="{{$product->ID_type}}" placeholder="TP1 for Pay, TP2 for Free (default: TP2)" />
					</div>
					<div class="form-group">
						<input type="text" name="unit_price" class="form-control" value="{{$product->unit_price}}" placeholder="Enter unit price" />
					</div>
					<div class="form-group">
						<input type="text" name="promotion_price" class="form-control" value="{{$product->promotion_price}}" placeholder="Enter promotion price" />
					</div>
					<div class="form-group">
						<input type="text" name="image" class="form-control" value="{{$product->image}}" placeholder="Enter image name" />
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Edit"/>
					</div>
				</form>

		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection