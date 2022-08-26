@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>{{ $post->name }}</h1>
        <img width=400px src="{{asset("/storage/" . $post->cover_img)}}" alt="">
        <p>{{ $post->content }}</p>
        <div>Tags:
            @foreach ($post->tags as $tag)
            <span>{{ $tag->name }}</span>
            @if (!$loop->last)
                <span> - </span>
            @endif
        @endforeach
        </div>
        
        <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Indietro</a>

    </div>
@endsection
