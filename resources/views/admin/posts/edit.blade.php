@extends('layouts.app');

@section('content')
    <div class="container ">
        <form action="{{ route('admin.posts.update',$post->id) }}" method="post">
            @csrf
            @method("PATCH")
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Nome Post</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Post"
                    value="{{$post->name}}">
                    
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contenuto Post</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post->content}}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Salva Dati</button>

            </div>
        </form>
    </div>
@endsection
