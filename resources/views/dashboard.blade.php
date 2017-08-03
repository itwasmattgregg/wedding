@extends('layouts.app')

@section('bodyClasses', 'dashboard')

@section('content')
    @include('partials.header', ['title' => 'Guest List', 'background' => 'IMG_1756.jpg'])

    <div class="container">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <div class='text-center'>
            <h2><small>Total</small><br>{{ $total }}<h2>
        </div>
        <div class="m-t-md row grid">
            @foreach ($people as $person)
            @php
                $panelClass = '';
                if($person->rsvp) {
                    $panelClass = 'success';
                }
                elseif (is_null($person->rsvp)) {
                    $panelClass = 'info';
                }
                else {
                    $panelClass = 'danger';
                }
            @endphp
            <div class="col-md-4 col-sm-6 grid-item">
                <div class="panel panel-{{ $panelClass }}">
                    <div class="panel-heading">{{ $person->first_guest }}@if($person->second_guest) &amp; {{ $person->second_guest }}@endif</div>
                    @if(!is_null($person->rsvp))
                        <div class="panel-body">
                            @if(!empty($person->extra_people))
                                @if(!is_null($person->extra_people[0]['name']))
                                <p>
                                    Also Bringing:<br>
                                    @foreach ($person->extra_people as $extra)
                                        @if($extra['name'])
                                        - {{ $extra['name'] }}<br>
                                        @endif
                                    @endforeach
                                </p>
                                @endif
                            @endif
                            @if($person->special)
                                <p>Note: {{ $person->special }}</p>
                            @endif
                            <p class="text-muted">Last Updated: {{ date('F d, Y', strtotime($person->updated_at)) }}</p>
                        </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('page_scripts')

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
(function() {
	var elem = document.querySelector('.grid');
	var msnry = new Masonry( elem, {
	// options
	itemSelector: '.grid-item',
	columnWidth: function( containerWidth ) {
		return containerWidth /3;// depends how many boxes per row
	}()
	});

})();

</script>

@endsection
