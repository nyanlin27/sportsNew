@extends('frontend_master')
@section('content')
<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-shopping-cartfull">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <a href="{{ route('shop_gallery') }}" class="btn btn-default pull-right" style=" padding:12px; margin-bottom:70px; background-color:#FFDD38">
                        <i class="fa fa-shopping-cart"></i>
                        Contine Shopping
                    </a>
                    <div class="sportsmagazine-shopping-cart">
                        <h4>Your Shopping cart</h4>
                        <table class="sportsmagazine-client-detail">
                            <tr>
                                <th colspan="2">Product Info</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                {{-- <th></th> --}}
                            </tr>
                            <tbody id="shoppingcart_table">

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                        {{-- <span>
                            <a href="#" class="cart-checkout-btn">
                                Place Your Order Now
                            </a>
                        </span> --}}
                    </div>

                    @guest
                        <a href="{{ route('login') }}" class="btn btn-default pull-right checkoutBtn" style=" padding:12px; margin-bottom:70px; background-color:#27282A; color:white">
                            Login to Order Now
                        </a>
                    @else
                        <a href="javascript:void(0)" class="btn btn-default pull-right checkoutBtn" style=" padding:12px; margin-bottom:70px; background-color:#27282A; color:white">
                            Check Out
                        </a>
                    @endguest

                </div>


            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Successful Modal!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <div class="col-4"> <img src="{{ asset('frontend_assets/image/success-tick-dribbble.gif') }}" class="img-fluid"> </div> <div class="col-8 pt-5"> <h4> Your order is complete </h4> <p> You order will be delivered in 4 days. </p> </div> </div> <div class="modal-footer"> {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
    <a href="{{route('homepage')}}" class="btn btn-primary">OK</a> </div> </div> </div> </div> </div>
@endsection
