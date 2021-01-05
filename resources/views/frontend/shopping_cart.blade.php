@extends('frontend_master')

@section('content')

<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-shopping-cartfull">
				<div class="container">
					<div class="row">

                        <div class="col-md-2"></div>
						
						<div class="col-md-8">
                            <div class="sportsmagazine-shopping-cart">
                                <h4>Your Shopping cart</h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Product Info</th>
                                        <th>Price</th>
                                        
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="{{asset('frontend_asset/extra-images/shopping-cart-img1.jpg')}}" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                       
                                        <td><a class="color-change" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="01"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                  
                                </table>
                                <p>
                                    <span>Coupone Code</span>
                                    <input type="text" value="Enter Your Coupon Code" onblur="if(this.value == '') { this.value ='Enter Your Coupon Code'; }" onfocus="if(this.value =='Enter Your Coupon Code') { this.value = ''; }">
                                    <input type="submit" value="Apply Coupon">
                                </p>
                            </div>
                        </div>
                     

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@endsection