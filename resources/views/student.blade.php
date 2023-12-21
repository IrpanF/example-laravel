@extends('layouts.mainlayout')

@section('title', 'student')

@section('content')
    <h1>Ini adalah Student</h1>
    <h3>student List</h3>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Class</th>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->class['name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection