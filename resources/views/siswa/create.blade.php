@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form action="/siswa/store" method="post">
            @csrf
            <table width="50%">

                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <td class="bar">SISWA</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" id="nama_siswa">
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <input type="radio" name="jk" id="jk" value="L">Laki-Laki
                        <input type="radio" name="jk" id="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">ALAMAT</td>
                    <td class="bar">
                        <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="kelas_id">
                            <option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
                                @endforeach
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="password" name="password" id="password">
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