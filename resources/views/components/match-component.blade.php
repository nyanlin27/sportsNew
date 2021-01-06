{{-- <div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div> --}}

@foreach($leagues as $league)
<li>
    <a href="{{route('matchpage', $league->id)}}">
        <img src="{{asset($league->photo)}}" width="30px">&nbsp;&nbsp;&nbsp;&nbsp;
        {{ $league->name }}
    </a>
</li>
@endforeach


