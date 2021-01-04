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
                                    <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                </figcaption>
                            </figure>
                            <section>
                                <h2><a href="blog-detail.html">{{$post->name}}</a></h2>
                                <p>{{ Str::limit($post->description, 200) }}</p>
                            </section>
                            <div class="sportsmagazine-blog-grid-options">
                                <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('frontend_asset/extra-images/blog-thumb-1.jpg ')}}" alt=""> Julia Martyn</a>
                                <ul>
                                    <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                    <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                    <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
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