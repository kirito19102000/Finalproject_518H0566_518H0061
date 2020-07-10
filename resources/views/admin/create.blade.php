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
					<h3>Add new product</h3>
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
				@if(\Session::has('success'))
					<div class="alert alert-success">
						<p>{{\Session::get('success')}}</p>
					</div>
				@endif

				<form action="{{url('product')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<input type="text" name="Name" class="form-control" placeholder="Enter product name" />
					</div>
					<div class="form-group">
						<input type="text" name="description" class="form-control" placeholder="Enter description" />
					</div>
					<div class="form-group">
						<input type="text" name="ID_type" class="form-control" placeholder="TP1 for Pay, TP2 for Free (default: TP2)" />
					</div>
					<div class="form-group">
						<input type="text" name="unit_price" class="form-control" placeholder="Enter unit price" />
					</div>
					<div class="form-group">
						<input type="text" name="promotion_price" class="form-control" placeholder="Enter promotion price" />
					</div>
					<div class="form-group">
						<input type="text" name="image" class="form-control" placeholder="Enter image name" />
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Create"/>
					</div>
				</form>

		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection