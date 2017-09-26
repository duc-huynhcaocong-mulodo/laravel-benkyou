<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
      return view('post.index');
    }

    public function show(){
      return view('post.show');
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

      Post::create(request(['title', 'body']));

      return redirect('/');
    }
}
