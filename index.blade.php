@extends ('layouts.master')

@section('content')
 <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Items Page</h1>
      </div>
</section>

    <div class="album text-muted">
      <div class="container">

        <div class="row"> 
        	@foreach($items as $item)
         	 @include ('items.item')
         	@endforeach
         </div>

      </div>
    </div> 
@endsection