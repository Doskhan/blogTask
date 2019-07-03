@extends('layouts.app')

@section('content')
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
        Blog
      </h3>

      <form method="POST" action="/posts/store">
        {{ csrf_field() }}
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
          </div>
        </div>
        <div class="form-group row">
          <label for="body" class="col-sm-2 col-form-label">Body</label>
          <div class="col-sm-10">
          {{-- <input type="text" class="form-control" id="body" name="body" placeholder="body"> --}}
          <textarea type="text" class="form-control" id="body" name="body" placeholder="body"></textarea> 
          </div>
        </div>
            

          <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </div>
      </form>

    </div><!-- /.blog-main -->


  </div><!-- /.row -->
</main>
</div>
@endsection
