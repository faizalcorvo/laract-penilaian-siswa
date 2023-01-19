@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA SISWA</h2>
        <form action="/siswa/update/{{ $siswa->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA SISWA</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa->nama_siswa }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <input type="radio" name="jk" id="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : "" }}>Laki-Laki
                        <input type="radio" name="jk" id="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : "" }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">ALAMAT</td>
                    <td class="bar">
                        <textarea name="alamat" id="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="kelas_id">
                            <option>--Pilih Kelas--</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}"{{ $siswa->kelas_id == $k->id ? 'selected' : '' }}>{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
                                @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="password" name="password" id="password" value="{{ $siswa->password }}">
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