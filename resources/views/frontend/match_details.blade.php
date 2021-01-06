@extends('frontend_master')

@section('content')


	<div class="sportsmagazine-main-content sportsmagazine-main-contentminus" >
            
           
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-fixture-thumb" >
                <span class="thumb-transparent"></span>

                <div class="container">
              		
						 
                    <div class="row">

                        <div class="col-md-5">
                            <div class="sportsmagazine-thumb-team-one">
                                <figure><img src="{{ $matchs->team->photo }}" ></figure>
                                <section>
                                    <h4>{{ $matchs->team->name }}</h4>
                                 <!--    <span>03 Mark Baily (21) </span>
                                    <span>10 Jonathon Trott (17)</span> -->
                                </section>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="sportmagazine-score-counter">
                                <h4></h4>
                                <span></span>
                                <p><span>V</span>S</p>
                                <!-- <div id="sportsmagazine-countdown" class="sportsmagazine-countdown"> -->
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="sportsmagazine-thumb-team-one">
                                <figure><img src="{{ $matchs->otherteam->photo }}" alt=""></figure>
                                <section>
                                    <h4>{{ $matchs->otherteam->name }}</h4>
                                  <!--   <span>03 Mark Baily (21) </span>
                                    <span>10 Jonathon Trott (17)</span> -->
                                </section>
                            </div>
                        </div>
                        <div class="mt-5 col-md-4 col-md-offset-4">
                        	<p style="color: white;">{{$matchs->description}}</p>
                        	
                        </div>

                            
                    </div>
                 
                </div>
            </div>
            


		</div>
		
@endsection