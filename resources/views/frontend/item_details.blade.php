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

                                <div class="clearfix"></div>
                                <a href="javascript:void(0)" class="addtocartBtn text-decoration-none sportsmagazine-banner-btn" data-id='{{ $items->id }}' data-name='{{ $items->name }}' data-photo='{{ $items->photo }}'  data-price='{{ $items->price }}' data-descraption="{{ $items->descraption }}">
                                    Add To Cart
                                </a>
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
                                            <a href="javascript:void(0)" class="addtocartBtn text-decoration-none" data-id='{{ $resent->id }}' data-name='{{ $resent->name }}' data-photo='{{ $resent->photo }}'  data-price='{{ $resent->price }}' data-descraption="{{ $resent->descraption }}">
                                                <img src="{{asset($resent->photo)}}" alt="">
                                                    <i class="fa fa-shopping-cart"></i>
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
