@extends('layouts.master')

@section('title', 'Horses')



@section('content')
    <div class="starter-template">
        <h1>Horses of Awesome Horse Shows</h1>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th> <th>Horse Name</th> <th>Registration Number</th> <th>Owner</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Toad</td> <td>888888888</td> <td>Mike</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Choco</td> <td>651645064</td> <td>Jacob</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Rojo</td> <td>555504430</td> <td>Larry</td>
        </tr>
        </tbody>
    </table>
@endsection