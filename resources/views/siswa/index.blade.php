@extends('main.layout')
@section('content')
    <center>
        <h2>LIST DATA SISWA</h2>
        <a href="/siswa/create" class="button-primary"></a>
        @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
            <p class="text-danger">{{ session('error') }}</p>
        @endif
        
    </center>
@endsection