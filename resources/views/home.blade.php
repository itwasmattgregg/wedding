@extends('layouts.app')

@section('bodyClasses', 'home')

@section('content')
<div class="logo">
	<img src="images/logo-animated.gif" alt="Matt &amp; Rachel's Wedding"/>
	<h2 class="header-white hide-below-gfb">10.07.17</h2>
</div>
<div class="hero box-border-line">
	<div class="background-shader"></div>
</div>
<section class="information wedding">
	<div class="container text-center">
		<h1 class="m-b-lg">
            Matthew Gregg &amp; Rachel Wilder<br>
            <small>October 7th, 2017 ~ Minneapolis, MN</small>
        </h1>
        <h2>The Wedding</h2>
		<p>The Ceremony and Reception will be located at <strong>St. Olaf Catholic Church</strong> in downtown Minneapolis.
        <br>Please dress in formal attire.
        <br><a href="https://www.google.com/maps/dir//St+Olaf+Catholic+Church,+215+S+8th+St,+Minneapolis,+MN+55402/" target="_blank">Directions</a></p>
        <img class="img-responsive m-b-md" src="/images/other/church.jpg" />
        <h3>Schedule</h3>
        <h4 class="timeline-item">
            Ceremony - 2:00pm
        </h4>
        <h4 class="timeline-item">
            Cocktail hour - 5:00pm.
        </h4>
        <h4 class="timeline-item">
            Dinner - 6:30 pm.
        </h4>
        <h4 class="m-b-md">
            Dancing to follow!
        </h4>
        <p class="text-large">
            You will be dismissed at the end of the ceremony before we invite you back for a cocktail hour. Here are some suggestions of things to do in the meantime if you are in need of some ideas:
        </p>
        <button class="btn btn-primary m-b-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Ideas <i class="glyphicon glyphicon-menu-down"></i>
        </button>
        <div class="collapse" id="collapseExample">
            <div class="">
                <ul>
                    <li>Grab a treat at Hen House Eatery, which is right across the street from St. Olaf.</li>
                    <li>Share a drink with friends at the Living Room bar in the Foshay Tower.</li>
                    <li>Take a short drive to Loring park and enjoy the weather.</li>
                    <li>Walk along the Stone Arch bridge.</li>
                    <li>Check out the Foshay Museum/Observation deck ($10/ticket but very worth it).</li>
                    <li>Explore the skyway system without ever stepping a foot outside.</li>
                    <li>Take a walk down Nicollet Mall and see the Mary Tyler Moore Statue.</li>
                    <li>Go home and let the dog out or nap so you have the energy to dance all night long!</li>
                </ul>
            </div>
        </div>
        <p>If you have any questions please email us at </p>
    </div>
</section>
<section class="information burgundy">
	<div class="container">
		<h2>
            Parking
        </h2>
		<div class="row">
            <p>
                If you plan on driving anywhere after the ceremony, we encourage you to park in St. Olaf’s free lot for the ceremony.
                All cars need to be moved from the parking lot by 4:00pm so that parishioners have a place to park for 4:00pm Mass.
                When you return for the reception, we encourage you to park in the NRG Energy Center Ramp ($5) located off of 3rd and 4th avenues and 8th and 9th streets.
                If you don’t plan on driving between the ceremony and reception, we encourage you to park in the NRG Energy Center Ramp ($5).
            </p>
        </div>
	</div>
</section>
<section class="information rose-gold">
	<div class="container">
		<h2>
            Registry
        </h2>
		<div class="row">
            We are registering at Crate & Barrel, Amazon, and Target. Links will be up shortly.
		</div>
	</div>
</section>
<section class="information">
    <div class="container">
		<h2>
            Accommodations
        </h2>
		<div class="row">
            <p>
                Closest airport is the Minneapolis/St. Paul Airport [MSP].
            <p>
                We have reserved blocks of rooms at these hotels for a discounted rate:
            </p>
            <address>
                <strong>Hilton Garden Inn</strong><br>

                1601 East American Blvd<br>

                Bloomington, MN 55425<br>
                <em>(This hotel is closest to the Minneapolis/St. Paul Airport.)</em>
            </address>

            <address>
                <a href="http://www.grandhotelminneapolis.com/" target="_blank"><strong>Kimpton Grand Hotel Minneapolis</strong></a><br>

                615 2nd Avenue S<br>

                Minneapolis, MN 55402<br>
                <em>(This hotel is located two blocks from the ceremony/reception location. The Bride and Groom will be staying at this hotel Saturday night. Great location in the center of downtown Minneapolis!)</em>
            </address>

            <p>
                We encourage you to look at other options via airbnb or other hotels if you prefer.
            </p>
		</div>
	</div>
</section>

@endsection
