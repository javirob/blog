@extends('layouts.app')

@section('content')
  <h1 class="mb-4">Edit Post</h1>
  <form action="{{route('posts.update', $post)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name='title' id="title" aria-describedby="title" value={{$post->title}}>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea class="form-control" id="body" rows="10" name="body">{{$post->body}}
      </textarea>
    </div>
      <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection