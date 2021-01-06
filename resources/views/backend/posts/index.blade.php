
@extends('backend_master')
@section( 'content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('posts.create') }}" class="btn btn-info float-right"> Add Post <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Post List</h4>
                {{ $posts->links() }}{{-- For Paginate --}}
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-3">
                                <div class="card" style="width: 16rem;">
                                    <img src="{{ $post->photo }}" class="card-img-top" alt="post">
                                    <small class="text-danger pt-3"> <i class="mdi mdi-calendar-today"></i> {{ $post->updated_at->diffForHumans() }}</small>
                                    <div class="card-body">
                                    <h2 class="card-title">{{ $post->name }}</h2>
                                    <p class="card-text">{{ Str::limit($post->description, 30) }}</p>
                                    </div>
                                    <div class="card-body">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm float-right">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" name="btnsubmit">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
