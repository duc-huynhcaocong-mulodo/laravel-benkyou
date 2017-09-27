<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
      $posts = Post::orderBy('created_at', 'decs')->get();

      return view('post.index', compact('posts'));
      //return view('post.index');
    }

    public function show(Post $post){
      //$post = Post::find($id);

      return view('post.show', compact('post'));
    }

    public function create(){
      return view('post.create');
    }

    public function store(){
      //dd(request(['title', 'body']));
      //Create a new post using a Request data
      //$post = new Post;

      //$post->title = request('title');
      //$post->body = request('body');
      //Save it to the database
      //$post->save();
      //And then redirect to homepage


      //Post::create([
      //  'title' => request('title'),
      //  'body' => request('body')
      //]);

      $this->validate(request(),[
        'title' => 'required',
        'body' => 'required'
      ]);
      Post::create(request(['title', 'body']));

      return redirect('/');
    }
}
