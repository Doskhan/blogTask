@extends('layouts.app')

@section('content')
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
        Blog
      </h3>
      <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">{{$post->created_at}} by <a href="#" class="font-italic border-bottom">{{$post->user->name}}</a></p>

        <ul class="list-group"><li class="list-group-item">{{$post->body}}</li>
          <li class="list-group-item"><a href="/posts/delete/{{$post->id}}" class="btn btn-danger">Delete Post</a></li>
        </ul>
      </div><!-- /.blog-post -->
      <div></div>
      <div class="row"><h2>Comments:</h2></div><br>
      <ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">{{$comment->body}}</li>
        <li class="list-group-item"><span class="font-italic border-bottom">by {{$comment->user->name}}</span><a href="/comments/delete/{{$comment->id}}" class="btn btn-danger" style="float: right;">Delete Comment</a></li>
        @endforeach
      </ul>
      <form method="POST" action="/posts/comment/store/{{$post->id}}">
        {{ csrf_field() }}
      <div class="form-group">
        <textarea name="body" class="form-control" placeholder="Comment here..."></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div><!-- /.blog-main -->


  </div><!-- /.row -->
</main>
</div>
@endsection
