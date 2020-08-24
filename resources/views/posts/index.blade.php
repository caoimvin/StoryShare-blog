@extends('layouts.app')

@section('content')
     <h1>Recent Posts</h1>
     <hr>
     @if(count($posts) > 0)
        <div class="post-grid">
            @foreach($posts as $post)
            <div class="well">
                @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                    <span class="edit-span"><a href="/posts/{{$post->id}}/edit">Edit</a></span>
                    @endif
                @endif
                <div class="">
                    <div class="post-image">
                        <a href="posts/{{$post->id}}"><img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
                    </div>
                    <div class="">
                        <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        {{-- alternative diplay method with bootstrap column-grid --}}

        {{-- @foreach($posts->chunk(3) as $post)
        <div class="row">
            @foreach($post as $po)
                <div class="well col-md-4">
                    <div class="">
                        <img style="width:100%;" src="/storage/cover_images/{{$po->cover_image}}" alt="">
                    </div>
                    <div class="">
                        <h3><a href="/posts/{{$po->id}}">{{ $po->title }}</a></h3>
                        <small>Written on {{ $po->created_at }} by {{ $po->user->name }}</small>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach --}}

        <div class="paginatation">{{ $posts->links() }}</div>
     @else
       <p>No posts found</p>
    @endif
@endsection