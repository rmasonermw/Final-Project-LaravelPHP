@extends('layouts.master')

@section('title', 'About')



@section('content')
    <div class="starter-template">
        <h2>This is the ABOUT page</h2>
        <p class="lead">Put the below paths in the search area to see the page.</p>
    </div>
    <ul>
        <li>home</li>
        <li>about</li>
        <li>contact</li>
        <li>members</li>
        <li>members/people</li>
        <li>members/horses</li>
        <li>members/showSchedule</li>
        <li>members/{memberId} - replace memberId with your member ID.</li>
        <li>howManyHorses/{howManyHorses} - replace memberId with the number of your horses.</li>
        <li>howManyShows/{howManyShows} - replace memberId with the number of shows you have attended.</li>
    </ul>

    </div>
@endsection