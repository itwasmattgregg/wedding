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
					<h3>Evan Larson</h3>
                    <small>Best Man</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/lara.jpg" alt="Lara Wilder" />
				</div>
				<div class="description">
					<h3>Lara Wilder</h3>
                    <small>Maid of Honor</small>
					<p>Sister of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/matt.jpg" alt="Matt Rowley" />
				</div>
				<div class="description">
					<h3>Matt Rowley</h3>
                    <small>Groomsman</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/afton.jpg" alt="Afton Eichelman" />
				</div>
				<div class="description">
					<h3>Afton Eichelman</h3>
                    <small>Bridesmaid</small>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/michael.jpg" alt="Michael Sperl" />
				</div>
				<div class="description">
					<h3>Michael Sperl</h3>
                    <small>Groomsman</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/michaela.jpg" alt="Michaela Sperl"  />
				</div>
				<div class="description">
					<h3>Michaela Sperl</h3>
                    <small>Bridesmaid</small>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/adam.jpg" alt="Adam Iverson" />
				</div>
				<div class="description">
					<h3>Adam Iverson</h3>
                    <small>Groomsman</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/courtney.jpg" alt="Courtney Anderson"  />
				</div>
				<div class="description">
					<h3>Courtney Anderson</h3>
                    <small>Bridesmaid</small>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/joe.jpg" alt="Joseph Held" />
				</div>
				<div class="description">
					<h3>Joseph Held</h3>
                    <small>Groomsman</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/kate.jpg" alt="Kate Held"  />
				</div>
				<div class="description">
					<h3>Kate Held</h3>
                    <small>Bridesmaid</small>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/jonny.jpg" alt="Jonny Wilder" />
				</div>
				<div class="description">
					<h3>Jonny Wilder</h3>
                    <small>Groomsman</small>
					<p>Friend of the Groom</p>
				</div>
			</div>
			<div class="member bride">
				<div class="member-img">
					<img src="/images/wedding-party/meredith.jpg" alt="Meredith Wilder"  />
				</div>
				<div class="description">
					<h3>Meredith Wilder</h3>
                    <small>Bridesmaid</small>
					<p>Friend of the Bride</p>
				</div>
			</div>
            <div class="member groom">
				<div class="member-img">
					<img src="/images/wedding-party/jason.jpg" alt="Jason Gregg" />
				</div>
				<div class="description">
					<h3>Jason Gregg</h3>
					<p>Brother of the Groom</p>
				</div>
			</div>
		</div>
	</div>
@stop
