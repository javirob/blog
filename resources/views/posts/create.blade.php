@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Post</h1>
    <form action="{{route('posts.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name='title' id="title" aria-describedby="title">
        <div id="title" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" rows="6" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection