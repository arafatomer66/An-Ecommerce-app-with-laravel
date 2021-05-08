@extends('frontend.template.layout')

@section('body')

	<section id="advertisement">
		<div class="container">
			<img src="{{ asset('frontend/images/shop/advertisement.jpg') }}" alt="" />
		</div>
	</section>

	<section>
        <div class="container">
            <div class="row">
                @include('frontend.includes.sidebar')


                <!-- Category Product Start -->
                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Buy Your Needs</h2>
						



							@foreach( $allProducts as $product )
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												
												<a href="{{ route('product.show', $product->slug) }}">
													@php  $i = 1; @endphp
		                                            @foreach( $product->images as $image )
		                                                @if ( $i > 0 )
		                                                    <img src="{{ asset('images/products/' . $image->image) }}" alt="" />
		                                                @endif
		                                                @php  $i--; @endphp
		                                            @endforeach
	                                            </a>


												<h2>
													@if( $product->offer_price != NULL )
	                                                    {{$product->offer_price}}
	                                                @else
	                                                    {{$product->regular_price}}
	                                                @endif
												</h2>
												<p>{{ $product->title }}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>
														@if( $product->offer_price != NULL )
		                                                    {{$product->offer_price}}
		                                                @else
		                                                    {{$product->regular_price}}
		                                                @endif
													</h2>
													<a href="{{ route('product.show', $product->slug) }}">
														<p>{{ $product->title }}</p>
													</a>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@endforeach



						
								
			
					</div><!--features_items-->
				</div>
                <!-- Category Product End -->


            </div>
        </div>
    </section>


@endsection