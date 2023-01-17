@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA JURUSAN</h2>
        <form action="/jurusan/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA JURUSAN</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan" id="nama_jurusan">
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