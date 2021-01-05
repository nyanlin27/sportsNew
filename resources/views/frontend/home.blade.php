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
                                       <img src="{{ asset ('frontend_asset/extra-images/liv.png')}}"  width="100px" alt="">
                                        <h4><a href="fixture-detail.html">Liverpool</a></h4>
                                        <span>03 Mark Baily (21, 30, 57)</span>
                                    </li>
                                    <li class="sportsmagazine-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong class="sportsmagazine-color">3</strong> <small>:</small> 0</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset ('frontend_asset/extra-images/man.png')}}"  width="100px" alt="">
                                        <h4><a href="fixture-detail.html">Manchester United</a></h4>
                                        {{-- <span>03 Mark Baily (21)</span> --}}
                                    </li>
                                </ul>
                            </div>
                            <!--// Latest Match Result \\-->

                            <!--// Fancy Title \\-->
                            <div class="sportsmagazine-fancy-title"><h2>Latest Blogs</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">

                                <ul class="row">
                                @foreach($posts as $post)
                                    <li class="col-md-6">
                                        <figure>
                                            <a href=""><img src="{{ $post->photo }}" alt=""></a>
                                            <figcaption>
                                                <span><small>Featured</small></span>
                                                <a href="{{ route('news_details', $post->id) }}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="{{route('news_details', $post->id)}}">{{ $post->name }}</a></h2>
                                                <p>{{ Str::limit($post->description, 200) }}</p>
                                        </section>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="row">
                                @foreach($theteams as $theteam)
                                <div class="col-md-6">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="{{route('news_details', $theteam->id)}}"><img src="{{ asset ($theteam->photo)}}" alt=""></a>
                                                    <figcaption>
                                                        <span><small>The Team</small></span>
                                                        <a href="{{route('news_details', $theteam->id)}}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="{{route('news_details', $post->id)}}">{{ $theteam->name }}</a></h2>
                                                    <p>{{ $theteam->descraption }}</p>
                                                </section>
                                                <div class="sportsmagazine-blog-grid-options">
                                                    <a href="{{route('news_details', $theteam->id)}}" class="sportsmagazine-blog-grid-thumb"><img src="{{ asset ('frontend_asset/extra-images/blog-thumb-1.jpg ')}}" alt=""> Julia Martyn</a>
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
                                @endforeach
                            </div>
                            <!--// Blog's \\-->


                            <!--// Fancy Title \\-->
                            <div class="sportsmagazine-fancy-title">
                                <h2>Legend Players in History</h2>
                            </div> <!--// Fancy Title \\-->
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

                            <!--// Fancy Title \\-->
                            <div class="sportsmagazine-fancy-title">
                                <h2>Store </h2>
                            </div> <!--// Fancy Title \\-->
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
                                    @foreach($items as $item)
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="{{ route('item_details', $item->id) }}" class="fancybox">
                                                <img src="{{ asset ($item->photo)}}" alt="">
                                                <i class="icon-signs23"></i>
                                            </a>
                                            <span>Add to cart</span>
                                            <figcaption>
                                                <h6><a href="#">{{ $item->name }}</a></h6>
                                                <a href=""><time datetime="2008-02-14 20:00">Add to cart</time></a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">
                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title">
                                    <h2>Popular News</h2>
                                </div>
                                <ul>
                                 @foreach($populars as $popular)
                                    <li>
                                        <img src="{{$popular->photo}}"  alt="">
                                        <!-- <span>01</span> -->
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="{{ route('news_details', $popular->id) }}">
                                                {{ Str::limit($popular->description, 100) }}
                                            </a>
                                            <time datetime="2008-02-14 20:00">
                                                {{ $popular->updated_at->diffForHumans() }}
                                            </time>
                                        </div>
                                    </li>
                                 @endforeach
                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                            <!--// Widget Trending News \\-->
                            <div class="widget widget_trending_news">
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                            @foreach($posts as $post)
                                                <li>
                                                    <div class="popular_news_text">
                                                        <small>The Team</small>
                                                        <a href="blog-detail.html">
                                                            {{ Str::limit($post->name, 20) }}
                                                        </a>
                                                        <time datetime="2008-02-14 20:00">
                                                            December 21, 2017
                                                        </time>
                                                        <p>
                                                            {{ Str::limit($post->description, 200) }}
                                                        </p>
                                                    </div>
                                                </li>
                                             @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="widget_popular_news">
                                            <ul>
                                             @foreach($posts as $post)
                                                <li class="widget-injuries">
                                                    <div class="popular_news_text">
                                                        <small>Injuries</small>
                                                        <a href="blog-detail.html">
                                                            {{ Str::limit($post->name, 20) }}
                                                        </a>
                                                        <time datetime="2008-02-14 20:00">
                                                            December 21, 2017
                                                        </time>
                                                        <p>
                                                            {{ Str::limit($post->description, 200) }}
                                                        </p>
                                                    </div>
                                                </li>
                                             @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="widget_popular_news">
                                            <ul>
                                            @foreach($posts as $post)
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">
                                                            {{ Str::limit($post->name, 20) }}
                                                        </a>
                                                        <time datetime="2008-02-14 20:00">
                                                            December 21, 2017
                                                        </time>
                                                        <p>
                                                            {{ Str::limit($post->description, 730) }}
                                                        </p>
                                                    </div>
                                                </li>
                                             @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!--// SideBaar \\-->

                        <div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">
                                @foreach($matches as $match)
                                    <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                        <time datetime="2008-02-14 20:00">{{ $match->match_date }}</time>
                                        <ul class="sportsmagazine-bgcolor">
                                            <li class="first-child"><small><img src="{{ $match->team->photo }}" alt="Team Logo" width="50px" height="50px"></small> VS <span><img src="{{$match->otherteam->photo}}" alt="Team Logo" width="50px" height="50px"></span></li>
                                            <li>{{ $match->match_time }}</li>
                                        </ul>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
				</div>
			</div>
			<!--// Main Section \\-->
		</div>
        <!--// Main Content \\-->



@endsection
