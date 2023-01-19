@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA MENGAJAR</h2>
            <a href="/mengajar/create" class="button-primary">TAMBAH DATA</a>
                @if (session('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                @if (session('error'))
                    <p class="text-danger">{{ session('error') }}</p>
                @endif
                <table cellPadding="10">
                    <tr>
                        <th>NO</th>
                        <th>GURU</th>
                        <th>MATA PELAJARAN</th>
                        <th>KELAS</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach ($mengajar as $mr)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mr->guru->nama_guru }}</td>
                            <td>{{ $mr->mapel->nama_mapel }}</td>
                            <td>{{ $mr->kelas->nama_kelas }}</td>
                            <td>
                                <a href="/mengajar/edit/{{ $mr->id }}" class="button-warning">EDIT</a>
                                <a href="/mengajar/destroy/{{ $mr->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
        </b>
    </center>
@endsection