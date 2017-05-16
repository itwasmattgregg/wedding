@extends('layouts.app')

@section('bodyClasses', 'home')

@section('content')
<div class="logo">
	<img src="images/logo2.png" />
	<h2>10.07.18</h2>
</div>
<div class="hero box-border-line">
	<div class="background-shader"></div>
</div>
<section class="information">
	<div class="container">
		<h2 class="text-center">Information</h2>
	</div>
</section>
<section class="photo-gallery">
	<div class="container">
		<h2 class="text-center">Photos</h2>
		<div class="grid">

			@php
				$files = File::allFiles('images');
				shuffle($files);
			@endphp

			@foreach ($files as $file)
				@if(File::extension($file) == "jpg")
					<div class="grid-item">
						<img class="img-responsive" src="{{ $file }}" />
					</div>
				@endif
			@endforeach

			<div class="grid-item">
				<img class="img-responsive" src="/images/rachel.gif" />
			</div>
		</div>
	</div>
</section>
@endsection
