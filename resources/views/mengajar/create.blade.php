@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form action="/mengajar/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="guru_id">
                            <option value="">--Pilih Guru--</option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <select name="mapel_id" id="mapel_id">
                            <option value="">--Pilih Mata Pelajaran--</option>
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="kelas_id">
                            <option value="">--Pilih Kelas--</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">SIMPAN</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection