@extends('layouts.app')

@section('bodyClasses', 'dashboard')

@section('content')
    @include('partials.header', ['title' => 'Guest List', 'background' => 'IMG_1756.jpg'])

    <div class="container">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <div class="m-t-md row">
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
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-{{ $panelClass }}">
                    <div class="panel-heading">{{ $person->first_guest }}<br>{{ $person->second_guest }}</div>
                    <div class="panel-body">
                        <p>rsvp: {{ $person->rsvp }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
