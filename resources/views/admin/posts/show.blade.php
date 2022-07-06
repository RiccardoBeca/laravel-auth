@extends('layouts.app')

@section('content')
    <div class="container">

      <h1>Sei nella SHOW della CRUD</h1>

      <h2>{{ $post->title }}</h2>

      <p>

        {{ $post->content }}

      </p>


      <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Torna alla lista dei post</a>
       



    </div>

@endsection