@extends('frontend_master')

@section('content')

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

<!--// Main Section \\-->
<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="sportsmagazine-blog sportsmagazine-blog-medium">
                    <ul class="row">

                    @foreach($posts as $post)
                        <li class="col-md-6">
                            <figure><a href="blog-detail.html"><img src="{{$post->photo}}" alt=""></a></figure>
                            <div class="sportsmagazine-blogmedium-text">
                                <h5><a href="blog-detail.html">{{ Str::limit($post->name, 5) }}</a></h5>
                                <ul class="sportsmagazine-blogmedium-option">
                                    <li>
                                        <span>Date /</span>
                                        <time datetime="2008-02-14 20:00">21/11/2017</time>
                                    </li>
                                    <li>
                                        <span>By /</span>
                                        <small>Albert Martyn</small>
                                    </li>
                                </ul>
                                <!-- <p>{{ Str::limit($post->description, 200) }}</p> -->
                                <ul class="sportsmagazine-blogmedium-social">
                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                    <li><a href="https://twitter.com/login" class="fa fa-twitter"></a></li>
                                    <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
                                    <li><a href="https://www.youtube.com/" class="fa fa-youtube"></a></li>
                                </ul>
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