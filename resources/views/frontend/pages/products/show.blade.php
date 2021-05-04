@extends('frontend.template.layout')

@section('body')
	<!-- page indicator start -->
<section class="breadcrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Products</a></li>
				    <li class="breadcrumb-item active" aria-current="page">womens</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- page indicator end -->


<!-- product details main section  start -->
<section class="product_details">
	<div class="container">
		
		<!-- product details row start -->
		<div class="row product_details_row">
			
			<!-- product image start -->
			<div class="col-md-3">
				<div class="product_main_image">
					<img src="img/womens/womens1.jpg" class="block__pic img-fluid main_img img_one" >
					<img src="img/womens/women-fashion2.jpg" class="block__pic img-fluid hide_img main_img img_two" >
					<img src="img/womens/womens4.jpg" class="block__pic img-fluid hide_img main_img img_three" >
				</div>

				<!-- product sub image start-->
				<div class="row sub_image_row">
					
					<!-- sub image start -->
					<div class="col-md-4">
						<img src="img/womens/womens1.jpg" class="img-fluid sub_image" id="img_one" >
					</div>
					<!-- sub image end -->

					<!-- sub image start -->
					<div class="col-md-4">
						<img src="img/womens/women-fashion2.jpg" class="img-fluid sub_image" id="img_two">
					</div>
					<!-- sub image end -->

					<!-- sub image start -->
					<div class="col-md-4">
						<img src="img/womens/womens4.jpg" class="img-fluid sub_image" id="img_three" >
					</div>
					<!-- sub image end -->

				</div>
				<!-- product sub image end-->
			
			</div>
			<!-- product image end -->


			<!-- product details center part start -->
			<div class="col-md-6">
				
				<div class="product_detail_center">				
					<!-- title start -->
					<div class="product_detail_title">
						<h1>For DJI OSMO Mobile 2 Handheld Camera Phone Gimbal Tripod Stabilizer Practical</h1>
					</div>
					<!-- title end -->

					<!-- product rating box start -->
					<div class="row product_rating_row">
						<div class="col-md-3 pd-0">
							<div class="product_detail_rating">
								 <ul>
								 	<li><i class="far fa-star"></i></li>
								 	<li><i class="far fa-star"></i></li>
								 	<li><i class="far fa-star"></i></li>
								 	<li><i class="far fa-star"></i></li>
								 	<li><i class="far fa-star"></i></li>
								 </ul>
							</div>
						</div>

						<!-- rating start-->
						<div class="col-md-6 rating_num">
							 <a href="">6 rating</a>
						</div>
						<!-- rating end-->

						<!-- share option start -->
						<div class="col-md-3">
							<div class="product_share">
								<ul>
									<li><a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
									<li><a href=""><i class="fa fa-heart" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- share option end -->

					</div>
					<!-- product rating box end -->

					<!-- brand start -->
					<div class="product_brand">
						<p>
							Brand : 

							<a href="">Geartronic | </a>
							<a href="">More Camera Accessories from Geartronic</a>
						</p>
					</div>
					<!-- brand end -->

					<!-- price start -->
					<div class="product_price">
						<h2>৳ 235</h2>
					</div>
					<!-- price end -->

					<!-- quantiiy start -->
					<div class="row quantity">
						<div class="col-md-3 pd-0">
							<p>quantity : </p>
						</div>
						<div class="col-md-9">
							<form>
	                            <input type="number" name="">
	                        </form>
						</div>
					</div>
					<!-- quantity end -->

					<!-- add to cart start -->
					<div class="add_to_cart">
						<a href="">Add to Cart</a>
						<a href="">buy now</a>
					</div>
					<!-- add to cart end -->
				</div>
			
			</div>
			<!-- product details center part end -->

			<!-- delivery option start -->
			<div class="col-md-3">
				<div class="delivery_option_box">
					
					<!-- title start -->
					<div class="delivery_title">
						 <p>Delivery Option <i class="fa fa-exclamation-circle delivery_condition" aria-hidden="true"></i></p>
						 <div class="delivery_condition_box">
						 	<p>Fulfilled by Daraz (FBD) products are Stored, Packed & Shipped to you directly from a Daraz warehouse to ensure the fastest, most convenient delivery. FBD products are generally eligible for Express delivery (Same-Day or Next-Day delivery) if available in your area.</p>
						 </div>
					</div>
					<!-- title end -->

					<!-- location start -->
					<div class="row delivery_location">
						<div class="col-md-1">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>

						<div class="col-md-6">
							<p>	Dhaka, Dhaka North, Banani Road No. 12 - 19</p>
						</div>

						<div class="col-md-4">
							<div class="change_location">
								<select class="form-control chosen-select" id="select1">
									<option selected="" disabled="">Change</option>
									<option>Dhaka</option>
									<option>Usa</option>
									<option>Australia</option>
								</select>
							</div>
						</div>

					</div>
					<!-- location end -->

					<!-- return and waranty start -->
					<div class="return_and_waranty">

						<div class="delivery_title">
							 <p>Return & waranty <i class="fa fa-exclamation-circle delivery_condition" aria-hidden="true"></i></p>
							 <div class="delivery_condition_box">
							 	<p>Fulfilled by Daraz (FBD) products are Stored, Packed & Shipped to you directly from a Daraz warehouse to ensure the fastest, most convenient delivery. FBD products are generally eligible for Express delivery (Same-Day or Next-Day delivery) if available in your area.</p>
							 </div>
						</div>
						<!-- title end -->

						<div class="row delivery_location">
							<div class="col-md-1">
								<i class="fa fa-repeat" aria-hidden="true"></i>

							</div>

							<div class="col-md-10 return">
								<h2>7 Days Returns</h2>
								<p>Change of mind is not applicable</p>
							</div>
						</div>

					</div>
					<!-- return and waranty end -->

					<!-- delivery rating start -->
					<div class="row delivery_rating">
						
						<!-- positive seller rating start -->
						<div class="col-md-6">
							<p>Positive seller rating</p>
							<h2>70%</h2>
						</div>
						<!-- positive seller rating end -->

						<!-- ship on time rating start -->
						<div class="col-md-6">
							<p>ship on time</p>
							<h2>50%</h2>
						</div>
						<!-- ship on time rating end -->

					</div>
					<!-- delivery rating end -->

				</div>
			</div>
			<!-- delivery option end -->

		</div>
		<!-- product details row end -->


		<!-- product description start -->
		<div class="row product_description">
			
			<!-- description name start -->
			<div class="col-md-12">
				
				<div class="row">
					<!-- description start -->
					<div class="col-md-3 product_description_name" id="id_one">
						<p>Product Description</p>
					</div>
					<!-- description end -->

					<!-- Additional Information start -->
					<div class="col-md-3 product_description_name" id="id_two">
						<p>Additional Information</p>
					</div>
					<!-- Additional Information end -->

					<!-- Shipping & Return start -->
					<div class="col-md-3 product_description_name" id="id_three">
						<p>Shipping & Return</p>
					</div>
					<!-- Shipping & Return end -->

					<!-- Reviews start -->
					<div class="col-md-3 product_description_name" id="id_four">
						<p>Reviews(4)</p>
					</div>
					<!-- Reviews end -->
				</div>

			</div>
			<!-- description name end -->

			<!-- product description item start -->
			<div class="col-md-12 for_product_description_name id_one">
				<h2>Description</h2>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			</div>
			<!-- product description item end -->

			<!-- Additional Information start -->
			<div class="col-md-12 hide_product_desc for_product_description_name id_two">
				<h2>Additional Information</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
				<ul>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Faux suede fabric</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Gold tone metal hoop handles.</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> RI branding</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Snake print trim interior</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Adjustable cross body strap</li>
                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                </ul>
			</div>
			<!-- Additional Information item end -->

			<!-- Shipping & Return start -->
			<div class="col-md-12 hide_product_desc for_product_description_name id_three">
				<h2>Shipping & returns</h2>
                <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our Delivery information
                We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our Returns information </p>
			</div>
			<!-- Shipping & Return item end -->

			<!-- Reviews item start -->
			<div class="col-md-12 hide_product_desc for_product_description_name id_four">
				<h2> 4 review for this product</h2>

                <!-- item -->
                <div class="row review-item-row">
                    <div class="col-md-1">
                        <img src="img/download (1).png" class="img-fluid">
                    </div>
                    <div class="col-md-11">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Cobus Bester – June 7, 2013</p>
                                </div>
                                <div class="col-md-6 review-box-star">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Really happy with this print. The colors are great, and the paper quality is good too.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="row review-item-row">
                    <div class="col-md-1">
                        <img src="img/download (1).png" class="img-fluid">
                    </div>
                    <div class="col-md-11">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Cobus Bester – June 7, 2013</p>
                                </div>
                                <div class="col-md-6 review-box-star">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Really happy with this print. The colors are great, and the paper quality is good too.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="row review-item-row">
                    <div class="col-md-1">
                        <img src="img/download (1).png" class="img-fluid">
                    </div>
                    <div class="col-md-11">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Cobus Bester – June 7, 2013</p>
                                </div>
                                <div class="col-md-6 review-box-star">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Really happy with this print. The colors are great, and the paper quality is good too.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="row review-item-row">
                    <div class="col-md-1">
                        <img src="img/download (1).png" class="img-fluid">
                    </div>
                    <div class="col-md-11">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Cobus Bester – June 7, 2013</p>
                                </div>
                                <div class="col-md-6 review-box-star">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Really happy with this print. The colors are great, and the paper quality is good too.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->

                
                <div class="row add-review">
                    <div class="col-md-12">
                        <h2>Add a review</h2>
                        <form action="" method="">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your review</label>
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<!-- Reviews item end -->

		</div>
		<!-- product description end -->


		<!-- related product row start -->
		<div class="row related_product_row">
            
	 		<div class="col-12">
	            <div class="best-seller-heading">
	                <h3>Related Products</h3>
	            </div>
	        </div>

	        <div class="row">
	            <!--Item 1-->
	            <div class="col-md-4 best-seller-element-item">

	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/mens-best-seller/best-seller1.jpg" class="img-fluid" alt="">
	                        </a>
	                        <div class="sales-tag">
	                            <span>50% off</span>
	                        </div>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href="" data-toggle="" data-placement="top" title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href="" data-toggle="" data-placement="top" title="Add to compare"><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>
	            </div>

	            <!--Item 2-->

	            <div class="col-md-4 best-seller-element-item">


	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/womens-best-seller/womens2.jpg" class="img-fluid" alt="">
	                        </a>
	                        <div class="sales-tag">
	                            <span>30% off</span>
	                        </div>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href=""><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>

	            </div>

	            <!--Item 3-->
	            <div class="col-md-4 best-seller-element-item">


	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/baby-best-seller/baby1.jpg" class="img-fluid" alt="">
	                        </a>
	                        <div class="sales-tag">
	                            <span>15% off</span>
	                        </div>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href=""><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>

	            </div>

	            <!--Item 4-->
	            <div class="col-md-4 best-seller-element-item">


	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/home-living-best-seller/home-living1.jpg" class="img-fluid" alt="">
	                        </a>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href=""><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>

	            </div>

	            <!--Item 5-->
	            <div class="col-md-4 best-seller-element-item">


	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/mens-best-seller/best-seller3.jpg" class="img-fluid" alt="">
	                        </a>
	                        <div class="sales-tag">
	                            <span>40% off</span>
	                        </div>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href=""><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>
	            </div>


	            <!--Item 6-->
	            <div class="col-md-4 best-seller-element-item">

	                <div class="shop-popular-product-list-warper">
	                    <div class="shop-popular-featured-img best-seller-image">
	                        <a href="product-detail.php">
	                            <img src="img/womens-best-seller/womens11.jpg" class="img-fluid" alt="">
	                        </a>
	                        <div class="sales-tag">
	                            <span>70% off</span>
	                        </div>
	                    </div>
	                    <div class="shop-popular-list-info">
	                        <div class="entery-header">
	                            <a href="#">
	                                <h3>Furniture Dressing Table</h3>
	                            </a>
	                        </div>
	                        <span class="price"><span class="shop-popular-Price-amount amount"><span class="shop-popular-Price-currencySymbol">$</span>6,000</span></span>
	                        <div class="shop-ratting-icons">
	                            <ul class="nav">
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                                <li><i class="far fa-star"></i></li>
	                            </ul>
	                        </div>
	                        <div class="shop-popular-icons">
	                            <ul class="nav">
	                                <li>
	                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
	                                </li>
	                                <li><a href=""><i class="fa fa-heart"></i></a></li>
	                                <li>
	                                  <a href="img/mens/mens1.jpg" data-fancybox data-caption="Mens Jacket">
	                                    <i class="fa fa-eye all-img" aria-hidden="true" ></i>
	                                  </a>
	                                </li>
	                            </ul>

	                        </div>
	                    </div>

	                </div>
	            </div>

	        </div>

        </div>
        <!-- related product row end -->

	</div>
</section>
<!-- product details main section  end -->


<!-- related product -->
<section class="feature-section wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">
        

    </div>
</section>
<!-- related product -->
@endsection