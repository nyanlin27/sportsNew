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
                        <li class="col-md-4">
                            <figure>
                                <a href="{{ route('news_details', $post->id) }}">
                                    <img src="{{asset($post->photo)}}" alt="">
                                    <i class="fa fa-link"></i>
                                </a>
                            </figure>
                            <div class="sportsmagazine-blogmodren-text">
                                {{-- <ul class="sportsmagazine-blogmodren-option">
                                    <li><a href="404.html"><i class="fa fa-thumbs-o-up"></i> 32</a></li>
                                    <li><a href="404.html"><i class="fa fa-eye"></i> 84</a></li>
                                    <li><a href="404.html"><i class="fa fa-share-alt"></i> 89</a></li>
                                </ul> --}}
                                <time datetime="2008-02-14 20:00">
                                    {{ $post->updated_at->diffForHumans() }}
                                </time>
                                <h4>
                                    <a href="{{ route('news_details', $post->id) }}">
                                        {{ Str::limit($post->description, 10) }}
                                    </a>
                                </h4>
                                <p>
                                    <a href="{{ route('news_details', $post->id) }}">
                                        {{ Str::limit($post->description, 30) }}
                                    </a>
                                </p>
                            </div>
                        </li>
                       @endforeach
                    </ul>
                </div>
                <!--// Pagination \\-->
                <div class="sportsmagazine-pagination">
                  <ul class="page-numbers">
                    {{ $posts->links() }}{{-- For Paginate --}}
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
