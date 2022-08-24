@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>{{$post->name}}</h1>
        <p>{{$post->content}}</p>
        <a class="btn btn-primary" href="{{route("admin.posts.index")}}">Indietro</a>
    </div>

@endsection
