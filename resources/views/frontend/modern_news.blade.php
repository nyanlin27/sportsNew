@extends('frontend_master')

@section('content')

	<!--// Main Content \\-->
    <div class="sportsmagazine-main-content">

<!--// Main Section \\-->
<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="sportsmagazine-blog sportsmagazine-blogmodren">
                    <ul class="row">
                    @foreach($posts as $post)
                        <li class="col-md-3">
                            <figure><a href="{{ route('news_details') }}"><img src="{{$post->photo}}" alt=""><i class="fa fa-link"></i></a></figure>
                            <div class="sportsmagazine-blogmodren-text">
                                <ul class="sportsmagazine-blogmodren-option">
                                    <li><a href="404.html"><i class="fa fa-thumbs-o-up"></i> 32</a></li>
                                    <li><a href="404.html"><i class="fa fa-eye"></i> 84</a></li>
                                    <li><a href="404.html"><i class="fa fa-share-alt"></i> 89</a></li>
                                </ul>
                                <time datetime="2008-02-14 20:00"> August 23rd, 2017</time>
                                <h4><a href="blog-detail.html">{{ Str::limit($post->name, 24) }}</a></h4>
                                <p>{{ Str::limit($post->description, 80) }}</p>
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