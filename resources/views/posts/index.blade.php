@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row mb-2"><a href="/posts/create" class="btn btn-primary">Add</a></div>
  <div class="row mb-2">
    @foreach($posts as $post)
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          
          <h3 class="mb-0">
            <a class="text-dark" href="#">{{$post->title}}</a>
          </h3>
          <div class="mb-1 text-muted">{{$post->created_at}} by {{$post->user->name}}</div>
          <p class="card-text mb-auto">{{$post->body}}</p>
          <a href="/posts/show/{{$post->id}}">Continue reading</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>

</div>


@endsection
