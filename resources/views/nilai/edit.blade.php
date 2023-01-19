@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>EDIT DATA NILAI</h2>
            <form action="/nilai/update/{{ $nilai->id }}" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">GURU MENGAJAR</td>
                        <td class="bar">
                            <select name="mengajar_id" id="mengajar_id">
                                <option value="">--Pilih Guru Mengajar--</option>
                                @foreach ($mengajar as $m)
                                    <option value="{{ $m->id }}"{{ $nilai->mengajar_id == $m->id ? 'selected' : ''}}>{{ $m->guru->nama_guru }} {{ $m->mapel->nama_mapel }}</option>
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
                                    <option value="{{ $s->id }}"{{ $nilai->siswa_id == $s->id ? 'selected' : ''}}>{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN HARIAN</td>
                        <td class="bar">
                            <input type="number" name="uh" id="ud" value="{{ $nilai->uh }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN TENGAH SEMESTER</td>
                        <td class="bar">
                            <input type="number" name="uts" id="uts" value="{{ $nilai->uts }}">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">ULANGAN AKHIR SEMESTER</td>
                        <td class="bar">
                            <input type="number" name="uas" id="uas" value="{{ $nilai->uas }}">
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