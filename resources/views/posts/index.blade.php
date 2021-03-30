@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary mt-2 mb-4">New Post</a>
    @if (count($posts) > 0)
      @foreach ($posts as $post)
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h3> 
                  <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
                </h3>
                <small>Written on {{$post->created_at}}</small>
              </div>
            </div>
          </div>
      @endforeach
      {{$posts->links()}}
    @else
      <p>No posts found</p>
    @endif
@endsection