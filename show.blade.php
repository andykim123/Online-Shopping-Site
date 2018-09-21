@extends('layouts.master')

@section('content')
	<h1>{{$item->username}} </h1>
	<img src="{{url($item->image)}}" width="50%" height="50%"/>
	<p>Item description: {{$item->description}}</p>
	<p>Price: {{$item->price}}</p>
	<div class="comments">
		<ul class="list-group">
		@foreach ($item->comments as $comment)
			<li class="list-group-item">
				{{$comment->body}}
			</li>
		@endforeach
		</ul>
	</div>

	<hr>

	<div class="card">
		<div class="card-block">
			<form method="POST" action="/items/{{$item->id}}/comments">
				{{csrf_field()}}
		<!-- 		{{method_field('PATCH')}} -->
				<div class="form-group">
					<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
				</div>

				<div class="form-group">
  					<button type="submit" class="btn btn-primary">Add comment</button>
  				</div>
			</form>

			<form method="POST" action="/items/{{$item->id}}/purchases">
				{{csrf_field()}}
				<div class="form-group">
  					<button type="submit" class="btn btn-primary">Purchase</button>
  				</div>
				<div class="form"
			<div class="alert alert_error">
				<ul>
			@foreach ($errors->all() as $error)
				<li>	{{$error}} 	</li>
			@endforeach
			</div>
	
		</div>
	</div>

	

@endsection