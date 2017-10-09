<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts){
      // $posts = Post::latest()->filter(request(['month', 'year']))
      //         ->get();
      dd($posts);
      $posts = $posts->all();
      //$posts = (new \App\Repositories\Posts)->all();

      //$posts = $posts->get();
      //$archives = Post::archives();

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

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );

      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body'),
      //   'user_id' => auth()->id()
      // ]);

      return redirect('/');
    }
}
