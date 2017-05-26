@extends('layouts.app')

@section('bodyClasses', 'wedding-party')

@section('content')
	@include('partials.header', ['title' => 'Wedding Party', 'background' => 'IMG_1764.jpg'])

	<div class="container">
		<div class="titles row">
			<h2 class="col-xs-6 title__groom">#GreggSide</h2>
			<h2 class="col-xs-6 title__bride text-right">#WilderSide</h2>
		</div>
		<div class="wedding-party-members">
			<div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/evan.jpg" alt="Evan Larson" />
				</div>
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/lara.jpg" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Lara Wilder <small>Maid of Honor</small></h3>
					<p>Sister of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/matt.jpg" alt="Evan Larson" class="vertical-img" />
				</div>
				<div class="description">
					<h3>Matt Rowley <small>Groomsman</small></h3>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/afton.jpg" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Afton Eichelman <small>Bridesmaid</small></h3>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/DSC_3885.jpg" alt="Evan Larson" class="vertical-img" />
				</div>
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Best Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/rachel.gif" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Lara Wilder <small>Maid of Honor</small></h3>
					<p>Lorem ipsum</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/DSC_3885.jpg" alt="Evan Larson" class="vertical-img" />
				</div>
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Best Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/rachel.gif" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Lara Wilder <small>Maid of Honor</small></h3>
					<p>Lorem ipsum</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/DSC_3885.jpg" alt="Evan Larson" class="vertical-img" />
				</div>
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Best Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/rachel.gif" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Lara Wilder <small>Maid of Honor</small></h3>
					<p>Lorem ipsum</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/DSC_3885.jpg" alt="Evan Larson" class="vertical-img" />
				</div>
				<div class="description">
					<h3>Evan Larson <small>Best Man</small></h3>
					<p>Best Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/rachel.gif" alt="Lara Wilder"  />
				</div>
				<div class="description">
					<h3>Lara Wilder <small>Maid of Honor</small></h3>
					<p>Lorem ipsum</p>
				</div>
			</div>
		</div>
	</div>
@stop
