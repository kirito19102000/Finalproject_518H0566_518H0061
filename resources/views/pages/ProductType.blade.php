@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{Route('Home')}}'">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">

					<div class="col-sm-12">
						<div class="beta-products-list">

							<div class="beta-products-details">
								<p class="pull-left">Found {{count($product_type)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($product_type as $type)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
										@if($type->unit_price==0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Free</div></div>
										@elseif($type->promotion_price<>0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
											<a href={{Route('ProductDetail',$type->id)}}><img src="source/image/product/{{$type->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$type -> Name}}</p>
											<p class="single-item-price">
											@if($type->unit_price==0)
												<span class="flash-sale">Free</span>
											@elseif($type->promotion_price==0)
												<span class="flash-sale">{{$type -> unit_price}}</span>
											@else
												<span class="flash-del">{{$type -> unit_price}}</span>
												<span class="flash-sale">{{$type -> promotion_price}}</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{Route('AddtoCart',$type->id)}}"><i>Add</i></a>
											<a class="beta-btn primary" href="{{Route('ProductDetail',$type->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class='row'>{{$product_type-> links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection