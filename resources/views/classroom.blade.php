@extends('layouts.mainlayout')

@section('title', 'student')

@section('content')
    <h1>Ini halaman Class</h1>
    <h3>Class List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection