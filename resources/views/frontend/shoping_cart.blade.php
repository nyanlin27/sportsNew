@extends('frontend_master')
@section('content')
<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-shopping-cartfull">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
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
                                    <figure><img src="extra-images/shopping-cart-img1.jpg" alt=""></figure>
                                    <div class="player-stats-text">
                                        <h6>Sun Sneakers</h6>
                                        <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                    </div>
                                </td>
                                <td>$28.00</td>

                                <td><input name="quantity" min="01" max="10" type="number" value="01"></td>
                                <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            {{-- <tr>
                                <td>
                                    <figure><img src="extra-images/shopping-cart-img2.jpg" alt=""></figure>
                                    <div class="player-stats-text">
                                        <h6>Sun Sneakers</h6>
                                        <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                    </div>
                                </td>
                                <td>$28.00</td>
                                <td>8,5 (USA) </td>
                                <td><a class="color-change one" href="#"></a></td>
                                <td><input name="quantity" min="01" max="10" type="number" value="02"></td>
                                <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <figure><img src="extra-images/shopping-cart-img3.jpg" alt=""></figure>
                                    <div class="player-stats-text">
                                        <h6>Sun Sneakers</h6>
                                        <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                    </div>
                                </td>
                                <td>$28.00</td>
                                <td>8,5 (USA) </td>
                                <td><a class="color-change two" href="#"></a></td>
                                <td><input name="quantity" min="01" max="10" type="number" value="03"></td>
                                <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <figure><img src="extra-images/shopping-cart-img4.jpg" alt=""></figure>
                                    <div class="player-stats-text">
                                        <h6>Sun Sneakers</h6>
                                        <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                    </div>
                                </td>
                                <td>$28.00</td>
                                <td>8,5 (USA) </td>
                                <td><a class="color-change three" href="#"></a></td>
                                <td><input name="quantity" min="01" max="10" type="number" value="04"></td>
                                <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <figure><img src="extra-images/shopping-cart-img2.jpg" alt=""></figure>
                                    <div class="player-stats-text">
                                        <h6>Sun Sneakers</h6>
                                        <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                    </div>
                                </td>
                                <td>$28.00</td>
                                <td>8,5 (USA) </td>
                                <td><a class="color-change one" href="#"></a></td>
                                <td><input name="quantity" min="01" max="10" type="number" value="05"></td>
                                <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                            </tr> --}}
                        </table>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="sportsmagazine-cart-total sportsmagazine-shopping-cart-total">
                        <h4>Cart Totals</h4>
                        <ul>
                            <li>
                                <h6>Cart Subtotal</h6>
                                <span>$242.00</span>
                            </li>
                            <li class="total-cart">
                                <h6>Cart Total</h6>
                                <span>$282.00</span>
                            </li>
                        </ul>
                        <span><a href="#" class="cart-checkout-btn">Place Your Order Now</a></span>
                    </div>
                    <div class="sportsmagazine-update-shipping">
                        <h4>Calculating Shipping</h4>
                        <form>
                        <ul>
                            <li>
                                <div class="sportsmagazine-select">
                                    <select>
                                        <option value="">Select Your Country</option>
                                        <option value="pakistan">counter name</option>
                                        <option value="india">counter name</option>
                                        <option value="usa">counter name</option>
                                        <option value="student">counter name</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="sportsmagazine-select">
                                    <select>
                                        <option value="">Select Your State</option>
                                        <option value="pakistan">state name</option>
                                        <option value="india">state name</option>
                                        <option value="usa">state name</option>
                                        <option value="student">state name</option>
                                    </select>
                                </div>
                            </li>
                            <li><input type="submit" value="Update Shipping"></li>
                        </ul>
                        </form>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@endsection
