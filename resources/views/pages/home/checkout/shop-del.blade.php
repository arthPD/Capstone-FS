@extends('home-base')
@section('page-title')
	Thank you!
@stop


@section('heading')
	 Thank You!
@stop


@section('home-body')
<script type="text/javascript" src="/js/base.min.js"></script>
<link rel="stylesheet" type="text/css" href="/bootstrap.css">

<div class="row">
		<div class="ol-md-offset-1 col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Order Summary for TRNS000{{$transactionid}} {{$ctr}} item/s ordered</h3></div>

				    <div class="panel-body row">
				    	<div class="col-md-12">
				    		<div class="col-md-6">
				    			<h2>{{$custname}}</h2>
				    			<h4><i class="icon icon-phone"></i>{{$custc}}</h4>
				    			<h4><i class="icon icon-local-shipping"></i>{{$custa}}</h4>
				    			<hr>
				    			<h1></h1>
				    			<p><i class="icon icon-warning"></i></p>
				    		</div>
					    	<div class="col-md-6 pull-right">
								<div class="card">
									<div class="card-main">
										<div class="card-inner">
											<p class="card-heading title ">Order Summary</p>
												<div class="col-md-6 text-center">
													@foreach($carts as $cart)
														<p>{{$cart->name}}({{$cart->quantity}})</p>
													@endforeach
													<hr>
													<p>Sub total:</p>
													<p>Taxes: (12%)</p>
													<hr>
													<h3>TOTAL(VAT Incl):</h3>
												</div>
												<div class="col-md-6 text-center">
													@foreach($carts as $cart)
														<p>P {{number_format($cart->price*$cart->quantity, 2)}}</p>
													@endforeach
													<hr>
													<p>P {{number_format($subtotal, 2)}}</p>
													<p>P {{number_format($subtotal*0.12,2)}}</p>
													<hr>
													<h3>P {{number_format($subtotal+$subtotal*.12, 2)}}</h3>
												</div>
										</div>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-6">
								<p><i class="icon icon-event"></i> Will be delivered at: {{$transactiondate}}</p>
							</div>
							<form method="POST" action="finish">
							{{csrf_field()}}
								<div class="col-md-6">
									<input type="hidden" name="test" value="nothing"></input>
									<input type="submit" value="Confirm!" class="btn btn-blue waves-button waves-effect pull-right"></input>
								</div>
							</form>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@stop