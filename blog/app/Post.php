<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
    //protected $fillable = ['title', 'body'];

    protected $guarded =[];

    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function addComment($body){

      $this->comments()->create(compact('body'));

      // Comment::create([
      //   'body' => $body,
      //   'post_id' => $this->id
      // ]);
    }

    public function scopeFilter($query, $filter){
      $posts = Post::latest();
      //==Check if a variable is defined or not
      $checkMonth = isset($filter['month']);
      $checkYear = isset($filter['year']);
      if($checkMonth && $checkYear){
        if($month = $filter['month']){
          $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if($year = $filter['year']){
          $query->whereYear('created_at', $year);
        }
      }
    }
}
