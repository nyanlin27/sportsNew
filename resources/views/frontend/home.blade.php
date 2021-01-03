@extends('frontend_master')
@section('content')

	
		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <!--// Content \\-->
                        <div class="col-md-8">

                            <!--// Latest Match Result \\-->
                            <div class="sportsmagazine-match-result">
                                <div class="sportsmagazine-match-title">
                                    <h4>Latest Match Result</h4>
                                    <span>Saturday, March 24th, 2016</span>
                                </div>
                                <ul>
                                    <li>
                                       <img src="{{ asset ('frontend_asset/extra-images/manunited.jpg')}}"  width="100px" alt="">
                                        <h4><a href="fixture-detail.html">Yorkshire</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                    <li class="sportsmagazine-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong class="sportsmagazine-color">79</strong> <small>:</small> 73</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset ('frontend_asset/extra-images/mancity.jpg')}}"  width="100px" alt="">
                                        <h4><a href="fixture-detail.html">Sharks Club</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                </ul>
                            </div>
                            <!--// Latest Match Result \\-->

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Latest Blogs</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    @foreach($posts as $post)
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="{{route('news_details')}}"><img src="{{ $post->photo }}" alt=""></a>
                                            <figcaption>
                                                <span><small>Featured</small></span>
                                                <a href="{{route('news_details')}}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="{{route('news_details')}}">{{ $post->name }}</a></h2>
                                                <p>{{ Str::limit($post->description, 200) }}</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="{{route('news_details')}}" class="sportsmagazine-blog-grid-thumb"><img src="{{ asset ('frontend_asset/extra-images/blog-thumb-1.jpg ')}}" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="col-md-6 sportsmagazine-the-league">
                                        <figure>
                                            <a href="blog-detail.html"><img src="{{ asset ('frontend_asset/extra-images/latest-blog-2.jpg ') }}" alt=""></a>
                                            <figcaption>
                                                <span><small>The League</small></span>
                                                <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.html">Michael Bryan was chosen as best player with 45 points</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="extra-images/blog-thumb-1.jpg" alt=""> Julia Martyn</a>
                                            <ul>
                                                <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="blog-detail.html"><img src="{{ asset ('frontend_asset/extra-images/latest-blog-3.jpg')}}" alt=""></a>
                                                    <figcaption>
                                                        <span><small>The Team</small></span>
                                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="blog-detail.html">The vicotory againts The Shark brings us close to the Final</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                                </section>
                                                <div class="sportsmagazine-blog-grid-options">
                                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{ asset ('frontend_asset/extra-images/blog-thumb-1.jpg ')}}" alt=""> Julia Martyn</a>
                                                    <ul>
                                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                      <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="blog-detail.html"><img src="{{ asset ('frontend_asset/extra-images/latest-blog-3.jpg')}}" alt=""></a>
                                                    <figcaption>
                                                        <span><small>The Team</small></span>
                                                        <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="blog-detail.html">The vicotory againts The Shark brings us close to the Final</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui. Curabitr dignissi luctus nisi id euismod. feugiat eros. Pellentesque tempus tortor.</p>
                                                </section>
                                                <div class="sportsmagazine-blog-grid-options">
                                                    <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{ asset ('frontend_asset/extra-images/blog-thumb-1.jpg ')}}" alt=""> Julia Martyn</a>
                                                    <ul>
                                                        <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                                        <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                                        <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="sportsmagazine-blog sportsmagazine-blog-list">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>The Team</span>
                                                    <h6><a href="blog-detail.html">The victry againts The Shark bring us closer to the Final</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                            <li class="col-md-12 playoffs">
                                                <div class="sportsmagazine-blog-list-wrap">
                                                    <span>Playoffs</span>
                                                    <h6><a href="blog-detail.html">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2008-02-14 20:00">August 23rd, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit. Vestibulum a nunc dui.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!--// Blog's \\-->


                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Legend Players in History</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-player-slider">

                                <div class="sportsmagazine-player-slider-image">
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{ asset ('frontend_asset/extra-images/legend/pele.jpg')}}" style="height:396px;" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">PELE</a></h6>
                                                <small>Attacker</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{ asset ('frontend_asset/extra-images/legend/maradona.png')}}" style="height:396px" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Maradona</a></h6>
                                                <small>Forward</small>
                                            </section>
                                        </div>
                                    </div>
                                    
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{ asset ('frontend_asset/extra-images/legend/ronaldinho.jpg')}}" style="height:396px" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">Ronaldinho</a></h6>
                                                <small>Middle</small>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{ asset ('frontend_asset/extra-images/legend/maldini.jpg')}}" style="height:396px;" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>9</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">PALO Malidni</a></h6>
                                                <small>Forword</small>
                                            </section>
                                        </div>
                                    </div>
                                   
                                    <div class="sportsmagazine-player-image-layer">
                                        <img src="{{ asset ('frontend_asset/extra-images/legend/buffon.jpg')}}" style="height:396px;" alt="">
                                        <div class="sportsmagazine-player-slider-caption">
                                            <span>10</span>
                                            <section>
                                                <h6><a href="fixture-detail.html">buffon</a></h6>
                                                <small>Middle</small>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                                <div class="sportsmagazine-player-slider-nav">
                                   
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>38</span>
                                        <section>
                                            <h6>pele</h6>
                                            <small>Defensive</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>97</span>
                                        <section>
                                            <h6>maradona</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>10</span>
                                        <section>
                                            <h6>ronaldinho</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>10</span>
                                        <section>
                                            <h6>maldini</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                    <div class="sportsmagazine-player-nav-layer">
                                        <span>09</span>
                                        <section>
                                            <h6>buffon</h6>
                                            <small>Forword</small>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Store Gallery</h2></div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img1.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/shop-grid-img1.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>Add to cart</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <a href=""><time datetime="2008-02-14 20:00">Add to cart</time></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img2.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/shop-grid-img2.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>Add to cart</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Add to cart</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/gallery-modren-img3.jpg" class="fancybox"><img src="{{ asset ('frontend_asset/extra-images/shop-grid-img3.jpg')}}" alt=""><i class="icon-signs23"></i></a>
                                            <span>Add to cart</span>
                                            <figcaption>
                                                <h6><a href="#">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Add to cart</time>
                                            </figcaption>
                                        </figure>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">


                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    <li>
                                        <img src="{{asset('frontend_asset/extra-images/news2.jpg')}}"  alt="">
                                        <span>01</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-injuries">

                                        <img src="{{asset('frontend_asset/extra-images/news2.jpg')}}"  alt="">
                                        <span>02</span>
                                        <div class="popular_news_text">
                                            <small>Injuries</small>
                                            <a href="blog-detail.html">The Clovers defense must reinvent itself without</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-theleague">

                                        <img src="{{asset('frontend_asset/extra-images/news2.jpg')}}"  alt="">
                                        <span>03</span>
                                        <div class="popular_news_text">
                                            <small>The League</small>
                                            <a href="blog-detail.html">Take look to the brand new helmets for next season</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend_asset/extra-images/news2.jpg')}}"  alt="">
                                        <span>04</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">The Basketball women division started training</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend_asset/extra-images/news2.jpg')}}"  alt="">  
                                        <span>05</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                         

                            <!--// Widget Trending News \\-->
                            <div class="widget widget_trending_news">
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="widget_popular_news">
                                            <ul>
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          





                        </aside>
                        <!--// SideBaar \\-->

                        <div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">

                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 23, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ARS <span>03</span></li>
                                        <li>CHL <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 25, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">BRC <span>05</span></li>
                                        <li>RM <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 28, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">CIT <span>03</span></li>
                                        <li>KIN <span>03</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">August 31, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ST <span>00</span></li>
                                        <li>FRA <span>01</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <time datetime="2008-02-14 20:00">September 03, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                        <li>Full Booked</li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer">
                                    <time datetime="2008-02-14 20:00">September 05, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child">ARS <span>03</span></li>
                                        <li>CHL <span>02</span></li>
                                    </ul>
                                </div>
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <time datetime="2008-02-14 20:00">December 31, 2016</time>
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                        <li>Full Booked</li>
                                    </ul>
                                </div>

                            </div>
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


@endsection
