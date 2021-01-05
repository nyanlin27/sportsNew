@extends('frontend_master')

@section('content')





 <div class="sportsmagazine-main-content">

			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
						 @foreach($leagues->matches as $match)
					       <div class="col-md-6">


					       	<div class="panel panel-default">
                               <div class="panel-body " style="background-color: #ffdc11;">
               					  <aside class="" >

		                             <div class="widget widget_next_match">
		                            
		                                <ul >
		                                    <li>
		                                        <img src="{{ $match->team->photo }}" width="60px;" alt="">
		                                        <h6><a href="fixture-detail.html">{{ $match->team->name }}</a></h6>
		                                        
		                                    </li>
		                                    <li>
		                                        <div class="widget_next_match_option">
		                                            <h6>VS</h6>

		                                        </div>
		                                        <p style="font-weight: bold;">Anfield Stadium</p>
		                                    </li>
		                                    <li>
		                                        <img src="{{ $match->otherteam->photo }}" width="60px;" alt="">
		                                        <h6><a href="fixture-detail.html">{{ $match->otherteam->name }}</a></h6>
		                                        
		                                    </li>
		                                </ul>
		                               
		                             </div>
                             
                                   </aside>
                               </div>
                            </div>
					       	

					       </div>

                           
                           
                         @endforeach

                    </div>

               </div>

            </div>

 </div>



@endsection