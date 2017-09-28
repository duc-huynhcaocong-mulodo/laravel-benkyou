@extends ('layout.master')

@section('content')
<div class="col-sm-8 blog-main">
  <h1>{{ $post->title }}</h1>

  {{ $post->body }}

  <hr>
  <div class="comments">

    <ul class="list-group">
      <?php foreach ($post->comments as $comment): ?>


        <li class="list-group-item">
          <article>
            <strong>
              {{ $comment->created_at->diffForHumans() }}: &nbsp;
            </strong>

            {{ $comment->body }}
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Add a comment -->
  <hr>

  <div class="card">
    <div class="card-block">
      <form method="post" action="/post/<?php echo $post->id; ?>/comments">
        {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" placeholder="Your comment here." class="form-control" required>

            </textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>

      </form>

      @include('layout.errors')

    </div>
  </div>
</div>
@endsection
