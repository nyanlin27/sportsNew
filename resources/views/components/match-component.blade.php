


    	@foreach($leagues as $league)
        <div class="col-md-4">
           <ul class="sportsmagazine-megalist">
               <li>
                   <a href="{{route('matchpage', $league->id)}}">
                    <img src="{{asset($league->photo)}}" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $league->name }}
                    </a>
               </li>
           </ul>

        </div>
   @endforeach



