@extends('frontend_master')

@section('content')

	<!--// Main Content \\-->
    <div class="sportsmagazine-main-content">

<!--// Main Section \\-->
<div class="sportsmagazine-main-section sportsmagazine-shop-gridfull">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h2>Shop Gallery Mart</h2></div>
            <div class="col-md-12">
                <div class="sportsmagazine-shop sportsmagazine-shop-grid">
                    <ul class="row">
                        @foreach($items as $item)
                            <li class="col-md-3">
                                <figure>
                                    {{-- <a href="{{route('shoping_cart', $item->id)}}" >
                                    <img src="{{asset($item->photo)}}" alt="">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a> --}}
                                    <a href="javascript:void(0)" class="addtocartBtn text-decoration-none" data-id='{{ $item->id }}' data-name='{{ $item->name }}' data-photo='{{ $item->photo }}'  data-price='{{ $item->price }}' data-descraption="{{ $item->descraption }}">
                                        <img src="{{asset($item->photo)}}" alt="">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </a>


                                    <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                </figure>
                                <section>
                                    <h5>
                                        <a href="{{route('item_details', $item->id)}}">
                                        {{ $item->name }}
                                        </a>
                                    </h5>
                                    <span class="price-cart">
                                        {{-- <del>$ 30.00</del> --}}
                                         $ {{ $item->price }}
                                    </span>

                                    <span></span>
                                    <a href="{{route('item_details', $item->id)}}" class="btn btn-sm btn-warning " style="display: block;">details</a>
                                </section>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!--// Pagination \\-->
                <div class="sportsmagazine-pagination">
                  <ul class="page-numbers">
                    {{ $items->links() }}{{-- For Paginate --}}
                  </ul>
                </div>
                <!--// Pagination \\-->
            </div>
        </div>
    </div>
</div>
<!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection
