@extends('layouts.app')

@section('content')
  <a class="btn btn-secondary mb-4 ml-0" href="/posts">Back</a>
  <div class="card shadow-sm rounded mb-4">
    <div class="card-body">
      <h2 class="card-title">{{$post->title}}</h2>
      <p class="card-text">{{$post->body}}</p>
    </div>
    <div class="card-footer text-muted">
      Written on {{$post->created_at}}
    </div>
  </div> 
  <a href="{{route('posts.edit', $post)}}" class="btn btn-primary mr-2">Edit</a>
  <form id="delete-btn" action="{{route('posts.destroy', $post)}}" method="POST">
      @csrf
      @method('delete')
     <button type="submit" class="btn btn-danger">Delete</button>
  </form>
@endsection

