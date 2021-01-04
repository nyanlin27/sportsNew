@extends('frontend_master')

@section('content')


		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-contactus-full">
				<div class="container">
					<div class="row">
                        
                        <div class="col-md-12">


                            <div class="sportsmagazine-fancy-title-two"><h2>Location Map <span></span></h2></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.4874770168!2d95.90136548638063!3d16.838952473698683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1609747402030!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <!-- <div class="sportsmagazine-contact-map"><div id="map"></div></div> -->
                            <div class="sportsmagazine-fancy-title-two"><h2>Contact Us At <span></span></h2></div>
                            <div class="sportsmagazine-contactus-info">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <i class="fa fa-phone"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p> (+92) 123 45 678</p>
                                            <p> 987 65 432</p>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-map-marker"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p>9907 Salford road, east London</p>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-envelope"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <a href="mailto:name@email.com">info@sports.com</a>
                                            <a href="mailto:name@email.com">abc@mail.com</a>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-fax"></i>
                                        <div class="sportsmagazine-contact-text">
                                            <p> (+92) 123 45 678</p>
                                            <p> 987 65 432</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12"><div class="sportsmagazine-fancy-title-two"><h2>Contact Form <span></span></h2></div></div>
                        <div class="col-md-9">
                            <div class="sportsmagazine-contact-form">
                               <form>
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-user"></i></span>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Email:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </p>
                                        </li>
                                        <li class="full-input">
                                            <label>Message:</label>
                                            <p>
                                                <textarea name="u_msg" placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                        <li>
                                            <p><label><input value="Submit" type="submit"></label></p>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="sportsmagazine-contact-us-text">
                                <li>
                                    <h4>Send Us Message !!!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Ut ac malesuada antes urabitur lacinia</p>
                                </li>
                                <li>
                                    <h4>Open Practices</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Ut ac malesuada antes urabitur lacinia</p>
                                    <time datetime="2008-02-14 20:00">Timings: <span>9:00am to 12:00pm</span></time>
                                </li>
                            </ul>
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
                            <!--// Partner \\-->
                            <div class="sportsmagazine-fancy-title-two"><h2>Our Partners <span></span></h2></div>
                            <div class="sportsmagazine-partner-slider">
                                <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-1.jpg')}}" alt=""></a> </div>
                                <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-2.jpg')}}" alt=""></a> </div>
                                <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-3.jpg')}}" alt=""></a> </div>
                                <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-1.jpg')}}" alt=""></a> </div>
                                <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-3.jpg')}}" alt=""></a> </div>
                            </div>
                            <!--// Partner \\-->
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

@endsection