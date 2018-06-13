@extends('layouts.layout')

@section('content')
    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">{{$posts->title}}</h2>
                <p class="blog-post-meta">January 1, 2014 </p>

                <p>
                    {{$posts->body}}
                </p>

        </div>

    </div>
@endsection

