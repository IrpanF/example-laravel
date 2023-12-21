@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <h1>Ini adalah home</h1>

    <h2>selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>
    <button class="btn btn-primary">pencet</button>
<br>
    <!-- @if ($role == 'admin')
        <a href="">ke halaman admin</a>
    @elseif ($role == 'staff')
        <a href="">ke halaman gudang</a>
    @else 
        <a href="">ke halaman terseerah</a>
    @endif -->

    <!-- @switch($role)
        @case($role=='admin')
            <a href="">ke halaman admin</a>
            @break
    
        @case($role=='staff')
            <a href="">ke halaman gudang</a>
            @break
    
        @default
            <a href="">ke halaman terserah</a>
        
    @endswitch -->

    <!-- @for ($i = 0; $i < 10; $i++)
        {{$i}} <br>
    @endfor -->
 
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
        @endforeach
        </table>
@endsection