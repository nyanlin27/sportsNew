@extends('frontend_master')
@section('content')


	<!--// SubHeader \\-->

        <div class="text-center" >
            <!-- <span class="subheader-transparent"></span> -->
            <div class="container" style="margin-top: 50px; ">
                <div class="row">
                    <div class="col-md-12">

                        <img src="{{asset('frontend_asset/extra-images/league/premier_league.jpg')}}" style="width: 70px;">
                        <h1 style="font-size: 25px;
                                   font-weight: bold;
                                   /*margin-bottom: 8px;*/
                                   display: inline-block;
                                   text-transform: uppercase;
                                   color: #2f2f2f;
                                   font-family: 'Open Sans', sans-serif;
                                   font-style: normal;
                                   line-height: 1.5;
                                   margin: 0 0 8px;
}">
                               Premier League</h1>


                    </div>
                   <!--  <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Matche</li>

                            <li>Laliga</li>

                            <li>Premier League</li>


                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-fixture-listfull">
				<div class="container">
					<div class="row">



						

						<div class="col-md-12">
                            <div class="sportsmagazine-fixture sportsmagazine-fixture-list">
                                <ul class="row">

                                @foreach($leagues->premier league as $match)
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="{{$match->team->photo }}" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">{{$match->team->name}}</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 1</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="{{$match->otherteam->photo }}" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">{{$match->otherteam->name}}</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 21st, 2017 <span>@ 9:00 PM</span></time>
                                                </div>
                                                <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                 
                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                 <li><span class="page-numbers current">1</span></li>
                                 <li><a class="page-numbers" href="404.html">2</a></li>
                                 <li><a class="page-numbers" href="404.html">3</a></li>
                                 <li><a class="page-numbers" href="404.html">4</a></li>
                                 <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
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
