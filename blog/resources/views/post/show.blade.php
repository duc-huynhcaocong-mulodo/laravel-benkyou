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

</div>
@endsection
