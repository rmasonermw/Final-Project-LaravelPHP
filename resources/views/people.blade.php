@extends('layouts.master')

@section('title', 'People')



@section('content')
    <div class="starter-template">
        <h1>Members of Awesome Horse Shows</h1>
        <h2>Location of Members</h2>
    </div>

    <table class="table table-striped">
        <tr>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
        </tr>
        @foreach($rows as $row)
            <tr>
                @foreach($row as $field)
                    <td>{{ $field }}</td>
                @endforeach
            </tr>
        @endforeach


    </table>

@endsection