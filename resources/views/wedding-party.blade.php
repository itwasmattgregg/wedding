@extends('layouts.app')

@section('bodyClasses', 'wedding-party')

@section('content')
	@include('partials.header', ['title' => 'Wedding Party', 'background' => 'IMG_1764.jpg'])

	<div class="container">
		<div class="titles">
			<h2 class="title__groom">#greggSide</h2>
			<h2 class="title__bride">#wilderSide</h2>
		</div>
		<div class="wedding-party-members">
			<div class="member groom">
				<img src="" />
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Best Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">

			</div>
		</div>
	</div>
@stop
