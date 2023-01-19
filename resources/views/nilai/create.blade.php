@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>TAMBAH DATA NILAI</h2>
            <form action="/nilai/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">GURU MENGAJAR</td>
                        <td class="bar">
                            <select name="mengajar_id" id="mengajar_id">
                                <option value="">--Pilih Guru Mengajar--</option>
                                @foreach ($mengajar as $m)
                                    <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">NAMA SISWA</td>
                        <td class="bar">
                            <select name="siswa_id" id="siswa_id">
                                <option value="">--Pilih Nama Siswa--</option>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN HARIAN</td>
                        <td class="bar">
                            <input type="text" name="uh" id="uh">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN TENGAH SEMESTER</td>
                        <td class="bar">
                            <input type="text" name="uts" id="uts">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN AKHIR SEMESTER</td>
                        <td class="bar">
                            <input type="text" name="uas" id="uas">
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
        </b>
    </center>
@endsection