@extends('layouts.app')

@section('bodyClasses', 'home')

@section('content')
<div class="logo logo-absolute">
	<img src="images/wedding-logo1.png" />
</div>
<div class="hero box-border-line">
	<div class="content">
		<h1>The Wedding of <br>Matthew Gregg and <br>Rachel Wilder</h1>
	</div>
</div>
<section class="information">

</section>
<section class="photo-gallery">
	<div class="container">
		<div class="grid">
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1321.jpg" />
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1349.jpg" />
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1356.jpg" />
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1360.jpg" />
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1374.jpg" />
			</div>
			<div class="grid-item">
				<img class="img-responsive" src="/images/DSC_1380.jpg" />
			</div>
		</div>
	</div>
</section>
@endsection
