@extends('master')
@section('content')	
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Order</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{Route('Home')}}">Home</a> / <span>Order</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			
			<form action="{{Route('Checkout')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-6">
						<h4>Order</h4>
						<div class="space20">&nbsp;</div>


						<div class="form-block">
							<label for="adress">user name*</label>
							<p name="username" >{{Auth::user()->username}}</p>
						</div>
											
						<div class="form-block">
							<label for="notes">Note</label>
							<textarea name="notes"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Your order</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									@if(Session::has('cart'))
										@foreach($product_cart as $cart)
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="source/image/product/{{$cart['item']['image']}}" alt="" class="pull-left">
											<div class="media-body">
											<p class="font-large">{{$cart['item']['Name']}}</p>
											@if($cart['item']['promotion_price']<>0)
											<span class="cart-item-amount">{{$cart['item']['promotion_price']}}</span>
											@else
											<span class="cart-item-amount">{{$cart['item']['unit_price']}}</span>
											@endif

											</div>
										</div>
										@endforeach
									@endif
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Total:</p></div>
									<div class="pull-right"><h5 class="color-black">{{Session('cart')->totalPrice}}</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Note</h5></div>
								<br>Transfer funds to the following account:
								<br>- Account number: 123 456 789
								<br>- Account name: Nguyễn A
								<br>- Agribank


							

							<div class="text-center"><button class="submit" ><i class="btn btn-primary">Order </i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection