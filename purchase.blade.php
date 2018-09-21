@extends('layouts.master')

@section('content')
<h1>	{{$item->username}} </h1>
<div>
Current balance: <br><br>
-  price:  {{$item->price}} <br><br>
Remaining balnce: 
</div>
<form method="POST" action="/items/{{$item->id}}/purchases/checkout">
		{{csrf_field() }}
	<div class="form-group">
  			<button type="submit" class="btn btn-primary">Proceed to CheckOut</button>
  	</div>
</form>

@endsection