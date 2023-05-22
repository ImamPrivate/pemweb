
@extends('layouts.main')

@section('title', 'students')
    
@section('content')
    <h1><center>Halaman students</center></h1>
    <h3>Student List</h3>
    <ol>
        @foreach ($studentList as $data)
            <li>{{ $data->name }} | {{ $data->gender }}</li>
        @endforeach
    </ol>

@endsection