@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="starter-template">
        <h1>Home Page</h1>
<div class="site-cards-container">
    <div class="site-info-cards">
          <a href="{{ route('showPeople') }}">People</a>
        </div>

        <div class="site-info-cards">
            <a href="{{ route('showHorses') }}">Horses</a>
        </div>

        <div class="site-info-cards">
            <a href="{{ route('showSchedule') }}">Show Calendar</a>
        </div>
</div>
@endsection
