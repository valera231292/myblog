@extends('layouts.layout')

@section('content')
    <div class="row">
        @foreach($posts as $post)

                <div class="col-md-4">
                    <h2>{{ $post->title}}</h2>
                    <p>{{ $post->intro }}</p>
                    <p><a href="/posts/{{$post->id}}" class="btn btn-default">Читать далее</a> </p>
                    <p><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Редактировать</a> </p>
                   
                </div>

        @endforeach
    </div>

@endsection

