@extends('layouts.layout')

@section('content')

<form>
	

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
            <button class="btn btn-primary" type="submit">Запостить</button>
        </div>
        
        <div class="form-group">
            <p><input type="file" name="f">
           <input type="submit" value="Отправить"></p>
        </div>
        </form>

@endsection


      



