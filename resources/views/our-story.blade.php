@extends('layouts.app')

@section('bodyClasses', 'our-story')

@section('content')
		@include('partials.header', ['title' => 'Our Story', 'background' => 'IMG_1756.jpg'])

		<div class="container">
			<div class="row bride-and-groom">
				<div class="bride-and-groom-picture">
					<img src="/images/DSC_1321.jpg" alt="Rachel and Matt" />
				</div>
				<div class="col-sm-6 description description__bride">
					<h2>Rachel Teresa Wilder</h2>
				</div>
				<div class="col-sm-6 description description__groom">
					<h2>Matthew Donald Gregg</h2>
				</div>
			</div>
			<section class="story">
				<p class="lead text-center">
					Our love story
				</p>
				<p>
					Matt and I met playing board games in Robbinsdale, MN with our mutual friends Michaela
					and Michael Sperl (Michael invited Matt because he wanted another guy around). This was
					over my Christmas break as a college Junior. The next time we met was a New Year’s Eve
					party and Matt had his arm around me all night. One of my favorite memories of us.
				</p>
				<p>
					He asked me on a date that night, which was crucial because I was flying back to Maryland
					for spring semester the following week. Within that first week, we managed a successful first date
					and two more dates to follow.
				</p>
				<p>
					We got to know each other over the phone in the next few months and the next time I came
					home we started dating. We had a long-distance relationship until I finished college in Spring 2015.
				</p>
				<p>
					I moved home and started working in Minneapolis that summer. It was so wonderful being
					able to see Matt more often and to be able to drive 20 minutes to have a conversation
					rather than talk on the phone. We have lived near each other ever since.
				</p>
				<p>
					Some remarkable themes throughout our dating relationship include our faith, forgiveness,
					laughter, music, and quality time spent together. We enjoy being together and it doesn’t
					much matter what we are doing. We have developed a deep appreciation for good
					live music, red wine, Broder’s Pasta Bar, Pat's Tap cheese curds, going on walks/biking, flourless
					chocolate cake, and just adventuring in general.
				</p>
				<p>
					Matt asked me to marry him on February 12th, 2017. I enthusiastically said yes. I look forward to
					becoming his wife and learning how to love him more and more.
				</p>
				<p>
					I believe that every strong married couple is well-supported in prayer and love from
					family and friends. Matt and I are so grateful for all the love we receive from you all. We
					would be grateful for all the prayers you can spare as we continue our engagement and as we
					learn how to be a graceful bride and bridegroom for the rest of our lives :)
				</p>
				<p>
					We literally can’t wait to party with you in October!!!!
				</p>
			</section>
		</div>
@stop
