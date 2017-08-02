@extends('layouts.app')

@section('bodyClasses', 'dashboard')

@section('content')
    @include('partials.header', ['title' => 'Guest List', 'background' => 'IMG_1756.jpg'])

    <div class="container">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <div class="m-t-md row">
            @foreach ($people as $person)
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">{{ $person->first_guest }}<br>{{ $person->second_guest }}</div>
                    <div class="panel-body">
                        <p>#{{ $person->id }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
