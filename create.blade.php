@extends('layouts.master')

@section('content')
	<h1>Upload item</h1>

	<hr>


	<form method="POST" action="/items"  enctype="multipart/form-data">

		{{csrf_field() }}

  		<div class="form-group">
    		<label for="username">Item name</label>
    		<input type="text" class="form-control" id="username" name="username">
  		</div>
  		
  		<div class="form-group">
    		<label for="price">Price</label>
    		<input type="text" class="form-control" id="price" name="price">
  		</div>

  		<div class="form-group">
  			<label for="description">Description</label>
  			<textarea id="description" name="description" class="form-control"></textarea>

  		<div class="form-group">
    		<label for="image">Upload item image</label>
    		<input type="file" id="image" name="image" class="form-control"> 
    	
			</label>
  		</div>

  		<div class="form-group">
  			<button type="submit" class="btn btn-primary">Upload</button>
  		</div>
	</form>

	<div class="alert alert_error">
		<ul>
			@foreach ($errors->all() as $error)
				<li>	{{$error}} 	</li>
			@endforeach



	</div>
@endsection