<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    // $post = Post::all();
    // $post = Post::where('title', 'Post 2')->get();
    // $posts = DB::select('SELECT * FROM posts');
    // $posts = Post::orderBy('id', 'desc')->get();
    // $posts = Post::orderBy('id', 'desc')->take(1)->get();

    $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('posts.index')->with('posts', $posts);
  }


  public function create()
  {
    return view('posts.create');
  }


  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
    ]);

    $post = new Post();

    $post->title = $request->title;
    $post->body = $request->body;

    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post Created');
  }


  public function show(Post $post)
  {
    return view('posts.show')->with('post', $post);
  }


  public function edit(Post $post)
  {
    return view('posts.edit')->with('post', $post);
  }


  public function update(Request $request, Post $post)
  {
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
    ]);

    $post->title = $request->title;
    $post->body = $request->body;

    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post Updated');
  }


  public function destroy(Post $post)
  {
    $post->delete();
    return redirect()->route('posts.index')->with('success', 'Post Deleted');
  }
}
