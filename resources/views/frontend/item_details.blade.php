@extends('frontend_master')

@section('content')

	<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-shop-thumb">
                <span class="thumb-transparent"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="sportsmagazine-thumb-img">
                                <img src="{{$items->photo}}" alt=""></figure>
                        </div>
                        <div class="col-md-8">
                            <div class="sportsmagazine-shop-summery">
                                <h2>{{ $items->name }}</h2>
                                <span class="sportsmagazine-price-cartbox">
                                    {{-- <del>$50.00</del> --}}
                                     ${{ $items->price }}
                                </span>
                                <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                <p>{{ $items->description }}</p>
                                <ul class="sportsmagazine-summery-option">
                                    <li>
                                        <label>Quantity</label>
                                        <input name="quantity" min="01" max="10" type="number" value="1">
                                    </li>
                                    <li>
                                        <label>Size</label>
                                        <input name="quantity" min="5" max="40" type="number" value="5">
                                    </li>
                                    <li>
                                        <label>Size</label>
                                        <a href="#" class="white-color"></a>
                                        <a href="#" class="red-color"></a>
                                        <a href="#" class="yellow-color"></a>
                                        <a href="#" class="orange-color"></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <a href="shopping-cart.html" class="sportsmagazine-banner-btn">Add To Cart <span></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-12">


                            <div class="sportsmagazine-section-heading"><h2>Related Products</h2></div>
                            <div class="sportsmagazine-shop sportsmagazine-shop-grid">
                                <ul class="row">
                                    @foreach($resents as $resent)
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="shop-detail.html">
                                                <img src="{{$resent->photo}}" alt=""><i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                        </figure>
                                        <section>
                                            <h5><a href="{{ route('item_details', $resent->id) }}">{{ $resent->name }}</a></h5>
                                            <span class="price-cart">
                                                <del>$ 30.00</del>
                                                 ${{ $resent->price }}
                                                </span>
                                            <span></span>
                                        </section>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>




					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@endsection
