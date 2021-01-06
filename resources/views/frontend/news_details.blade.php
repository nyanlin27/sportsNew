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

                       
                                
                               
                              

                               <img src="{{asset($post->photo)}}" style="width:100%;height:500px;">
                                <h2 style="color:#2f2f2f;font-weight: bold;text-transform: uppercase;line-height: 1.1;font-family: 'Open Sans', sans-serif;font-style: normal;margin-top:20px;margin-bottom:20px;">{{ $post->name }}</h2>
                                <p>{{$post->description}}</p>
                             
                                <blockquote>{{$post->description}}
                                <span></span>
                                </blockquote>
                                <p>{{$post->description}}</p>



                                <div class="sportsmagazine-post-tags">
                                  <!-- <div class="sportsmagazine-tags">
                                     <a href="404.html">#Playoffs</a>
                                     <a href="404.html">#Injuries</a>
                                     <a href="404.html">#Teams</a>
                                     <a href="404.html">#Uniform</a>
                                  </div> -->
                                  <div class="sportsmagazine-blog-social">
                                     <ul>
                                        <li><a href="https://web.facebook.com/sharer.php?u=https%3A%2F%2Fmysportmyanmar.com%2Fbarcelona-plotting-move-for-leicester-hotshot-sidnei-tavares-19-the-cousin-of-man-utd-cult-hero-nani%2F&t=" class="color-one"><i class="fa fa-facebook"></i>facebook</a></li>
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

                                 @foreach($populars as $popular)
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                           <img src="{{$popular->photo}}" alt="">
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="{{ route('news_details', $popular->id) }}"> {{ Str::limit($popular->description, 100) }}</a></h5>
                                                <time datetime="2008-02-14 20:00"> {{ $popular->updated_at->diffForHumans() }}</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                 @endforeach


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
