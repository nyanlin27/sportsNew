@extends('frontend_master')

@section('content')

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

<!--// Main Section \\-->
<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                    <ul class="row">

                    @foreach($posts as $post)
                        <li class="col-md-4">
                            <figure>
                                <a href="#"><img src="{{$post->photo}}" alt=""></a>
                                <figcaption>
                                    <span><small>Featured</small></span>
                                    <a href="{{ route('news_details', $post->id) }}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                </figcaption>
                            </figure>
                            <section>
                                <h2><a href="{{ route('news_details', $post->id) }}">{{$post->name}}</a></h2>
                                <p>{{ Str::limit($post->description, 200) }}</p>
                            </section>
                             <div class="sportsmagazine-blog-grid-options">
                                            <a href="https://web.facebook.com/sharer.php?u=https%3A%2F%2Fmysportmyanmar.com%2Fbarcelona-plotting-move-for-leicester-hotshot-sidnei-tavares-19-the-cousin-of-man-utd-cult-hero-nani%2F&t=" ><img src="{{ asset ('frontend_asset/extra-images/facebook.jpg')}}" width="34px;" alt="">
                                            <img src="{{ asset ('frontend_asset/extra-images/instagram.jpg')}}" width="30px;" alt=""></a> <img src="{{ asset ('frontend_asset/extra-images/twitter.jpg')}}" width="30px;" alt=""></a>
                                              <ul>
                                                 <li>share</li>

                                              </ul>
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
