@extends('layout')

@section('content')
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">     
<div class="container">
    <div class="row">
        <h1 align='center'>Main Page</h1>
    </div>

    <div class="row">
    <section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
        @foreach($images as $image)
        <li class="splide__slide">
            <div class="col-md-3 gallery-item" style="display: flex; flex-direction: column; width:calc(100%  - 32px); padding-left:16px; padding-right:16px;align-items: center;">
                    <img src="/uploads/{{$image->image}}" alt="img-thumbnail" class="img-thumbnail" style="width: 500px; height: 500px">
                    <a class="btn btn-info" href="/show/{{$image->id}}">Show</a>
                    <a class="btn btn-warning" href="/edit/{{$image->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Delete this image?')" href="/delete/{{$image->id}}">Delete</a>
            </div>
            </li>
        @endforeach
			 
		</ul>
  </div>
</section>
<script>
  new Splide( '.splide' ).mount();
  document.onkeypress((e) => {
    alert(e.keyCode)
  })
</script> 
    </div>
</div>

@endsection