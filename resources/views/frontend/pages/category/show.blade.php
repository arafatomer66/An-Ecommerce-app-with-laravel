@extends('frontend.template.layout')

@section('body')

	<div class="col-sm-12 padding-right">
	    <!--features_items-->
	    <div class="features_items">
	        <h2 class="title text-center">Features Items</h2>

	        @foreach( $category as $product )

	        <div class="col-sm-4">
	            <div class="product-image-wrapper">
	                <div class="single-products">
	                        <div class="productinfo text-center">
	                            
	                            @php  $i = 1; @endphp
	                            @foreach( $product->images as $image )
	                                @if ( $i > 0 )
	                                    <img src="{{ asset('images/products/' . $image->image) }}" alt="" />
	                                @endif
	                                @php  $i--; @endphp
	                            @endforeach

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
	                                <p>{{ $product->title }}</p>
	                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
	                            </div>
	                        </div>
	                </div>
	                <div class="choose">
	                    <ul class="nav nav-pills nav-justified">
	                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
	                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>

	        @endforeach
	    </div>
	    <!--features_items-->
	</div>

@endsection