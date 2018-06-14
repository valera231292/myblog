@extends('layouts.layout')

@section('content')

<form enctype="multipart/form-data" action="/post" method="post">
	
{{csrf_field()}}
		<div class="page-header">
  <h1>Добавьте пост </h1>
    <small></small>
  
</div>
       
	
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input class="form-control" type="text" name="alias" id="alias">
        </div>

        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea class="form-control" type="text" name="intro" id="intro"></textarea>
        </div>

        <div class="form-group">
            <label for="intro">Body:</label>
            <textarea class="form-control" type="text" name="body" id="body"></textarea>
        </div>

        
        
        <div class="form-group">

            <p><input type="file" name="file">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
           <input class="btn btn-primary" type="submit" value="Отправить"></p>
        </div>

        @include('layouts.error')

        </div>
        </form>

@endsection


      



