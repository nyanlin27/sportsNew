@extends('frontend_master')
@section('content')
{{-- <h1>{{ $leagues->name }}</h1> --}}


<!--// SubHeader \\-->
<div class="sportsmagazine-subheader">
    <span class="subheader-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $leagues->name }}</h1>
                <img src="{{ $leagues->photo }}" width="100px" height="100px" alt="">
            </div>
            <div class="col-md-12">
                <ul class="sportsmagazine-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Fixtures</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// SubHeader \\-->

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-modren-fixturefull">
        <div class="container">
            <div class="row">
                @foreach($leagues->matches as $match)
                <div class="col-md-6">
                    <div class="panel panel-default" style="background-color:yellow;">
                        {{-- <div class="panel-heading text-center">
                            {{ $match->name }}
                        </div> --}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-5">
                                  <div class="thumbnail" style="background-color: #292C31; border-radius: 0 50px 50px 0px;">
                                    <img src="{{ $match->team->photo }}" alt="teamphoto">
                                    <h4 class="text-center" style="color: white">{{ $match->team->name }}</h4>
                                  </div>
                                </div>
                                <div class="col-xs-6 col-md-2">
                                    <div class="thumbnail" style="background-color: #292C31; border-radius: 0 50px 50px 0px;">
                                        <h4 class="text-center" style="color: white">
                                            VS
                                        </h4>
                                      </div>
                                </div>
                                <div class="col-xs-6 col-md-5">
                                    <div class="thumbnail" style="background-color: #292C31; border-radius: 50px 0 0 50px;">
                                      <img src="{{ $match->otherteam->photo }}" alt="teamphoto">
                                      <h4 class="text-center text-white">{{ $match->otherteam->name }}</h4>
                                    </div>
                                  </div>

                              </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>





@endsection

