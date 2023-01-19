@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA NILAI</h2>
            <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellPadding="10">
                <tr>
                    <th>NO</th>
                    <th>GURU MAPEL</th>
                    <th>NAMA SISWA</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NILAI AKHIR</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($nilai as $n)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->mengajar->guru->nama_guru }} {{ $n->mengajar->mapel->nama_mapel }} {{ $n->mengajar->kelas->nama_kelas }}</td>
                        <td>{{ $n->siswa->nama_siswa }}</td>
                        <td>{{ $n->uh }}</td>
                        <td>{{ $n->uts }}</td>
                        <td>{{ $n->uas }}</td>
                        <td>{{ $n->na }}</td>
                        <td>
                            <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>
                            <a href="/nilai/destroy/{{ $n->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
                    </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection