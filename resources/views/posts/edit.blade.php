@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.update', $post->id) }}">
                @csrf
 
        @method('PUT')
 
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" id="post_title" value={{ $post->title }} />
        </div>
        <div class="form-group">
          <label for="price">Body:</label>
          <textarea name="body" id="post_body" class="form-control">{{ $post->body }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection