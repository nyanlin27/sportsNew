@extends('frontend_master')

@section('content')


<!--// Main Content \\-->
<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
          
			<!--// Main Section \\-->
			<div style="margin-top:30px;" class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            <div class="sportsmagazine-rich-editor">
                               <img src="{{asset('frontend_asset/extra-images/news/new2.jpg')}}" style="width:100%;height:400px;">
                                <h2 style="color:#2f2f2f;font-weight: bold;text-transform: uppercase;line-height: 1.1;font-family: 'Open Sans', sans-serif;font-style: normal;margin-top:20px;margin-bottom:20px;">lorem</h2>
                                <p>lorem</p>
                               
                                <blockquote>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condi Suspendisse lacinia, risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna ellus tempor consectetur magna.
                                <span></span>
                                </blockquote>
                                
                               
                              
                                <div class="sportsmagazine-post-tags">
                                  <!-- <div class="sportsmagazine-tags">
                                     <a href="404.html">#Playoffs</a>
                                     <a href="404.html">#Injuries</a>
                                     <a href="404.html">#Teams</a>
                                     <a href="404.html">#Uniform</a>
                                  </div> -->
                                  <div class="sportsmagazine-blog-social">
                                     <ul>
                                        <li><a href="https://www.facebook.com/" class="color-one"><i class="fa fa-facebook"></i>facebook</a></li>
                                        <li><a href="https://twitter.com/login" class="color-two"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a href="https://plus.google.com/" class="color-three"><i class="fa fa-google-plus"></i>Google+</a></li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         

                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                        <div class="sportsmagazine-fancy-title"><h2>Related News</h2></div>
                            <!--// Widget Popular Post \\-->
                            
                            <div class="widget widget_popular_post">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                           <img src="{{asset('frontend_asset/extra-images/news/new1.jpg')}}" alt="">
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona  a the Mark Johnson has as</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                        <img src="{{asset('frontend_asset/extra-images/news/new2.jpg')}}" alt="">
                                            
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona  a the Mark Johnson has as</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                        <img src="{{asset('frontend_asset/extra-images/news/new3.jpg')}}" alt="">
                                           
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona  a the Mark Johnson has as</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                        <img src="{{asset('frontend_asset/extra-images/news/new4.jpg')}}" alt="">
                                            <!-- <figure><a href="blog-detail.html"><img src="{{asset('frontend_asset/extra-images/news/new1.jpg')}}" alt=""></a></figure> -->
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona  a the Mark Johnson has as</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                  
                                   
                                </ul>
                            </div>
                            <!--// Widget Popular Post \\-->

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

        
@endsection