@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Post
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
      <form method="post" action="{{ route('posts.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Titulo:</label>
              <input type="text" class="form-control" name="title" id="title" />
          </div>
          <div class="form-group">
              <label for="price">Descripción:</label>
              <textarea name="body" id="body" class="form-control"></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
          <a  class="btn btn-secondary" href="{{ route('posts.index') }}">Volver</a>
      </form>
  </div>
</div>
@endsection