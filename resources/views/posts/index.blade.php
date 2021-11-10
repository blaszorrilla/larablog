@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
 
  <div class="card uper">
 
  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('posts.create') }}"> Crear nuevo post</a>
  </div>
 
  <div class="card-body">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Título</td>
          <td>Descripción</td>
          <td colspan="3">Acción</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Editar</a></td>
            <td><a class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Ver</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection