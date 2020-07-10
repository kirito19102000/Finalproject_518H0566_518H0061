@extends('master')
@section('content')
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    	<div class="banner" >

								<ul>
									<!-- THE FIRST SLIDE -->
									@foreach($slide as $sl)
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl-> Image}}" data-src="source/image/slide/{{$sl-> Image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl-> Image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>


						       		</li>
						       		@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
	</div>
			<!--slider-->
</div>
<br></br>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Top Selling</h4>
							<div class="beta-products-details">
								<p class="pull-left">Found {{count($selling_product)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($selling_product as $selling)
								<div class="col-sm-3">
									<div class="single-item">
										@if($selling->unit_price==0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Free</div></div>
										@elseif($selling->promotion_price<>0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{Route('ProductDetail',$selling->id)}}"><img src="source/image/product/{{$selling -> image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$selling -> Name}}</p>
											<p class="single-item-price">
											@if($selling->unit_price==0)
												<span class="flash-sale">Free</span>
											@elseif($selling->promotion_price==0)
												<span class="flash-sale">{{$selling -> unit_price}}</span>
											@else
												<span class="flash-del">{{$selling -> unit_price}}</span>
												<span class="flash-sale">{{$selling -> promotion_price}}</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{Route('AddtoCart',$selling->id)}}"><i>Add</i></a>
											<a class="beta-btn primary" href="{{Route('ProductDetail',$selling->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>

								</div>
							@endforeach
							</div>

					
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Free</h4>
							<div class="beta-products-details">
								<p class="pull-left">Found {{count($free_product)}}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($free_product as $free)
								<div class="col-sm-3">
									<div class="single-item">
										@if($free->unit_price==0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Free</div></div>
										@elseif($free->promotion_price<>0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{Route('ProductDetail',$free->id)}}"><img src="source/image/product/{{$free-> image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$free -> Name}}</p>
											<p class="single-item-price">
											@if($free->unit_price==0)
												<span class="flash-sale">Free</span>
											@elseif($free->promotion_price==0)
												<span class="flash-sale">{{$free -> unit_price}}</span>
											@else
												<span class="flash-del">{{$free -> unit_price}}</span>
												<span class="flash-sale">{{$free -> promotion_price}}</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{Route('AddtoCart',$free->id)}}"><i>Add</i></a>
											<a class="beta-btn primary" href="{{Route('ProductDetail',$free->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
		
							</div>
							</div>
							
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
<!-- .container -->
@endsection