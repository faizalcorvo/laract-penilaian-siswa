@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>TAMBAH DATA GURU</h2>
            <form action="/guru/store" method="post">
                @csrf
                <table width="50%">
                    <tr>
                        <td class="bar">NIP</td>
                        <td class="bar">
                            <input type="text" name="nip" id="nip">
                        </td>
                    </tr>
                    <tr>
                        <td class="bar">NAMA GURU</td>
                        <td class="bar">
                            <input type="text" name="nama_guru" id="nama_guru">
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
                        <td class="bar">PASSWORD</td>
                        <td class="bar">
                            <input type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button class="button-primary" type="submit">SUBMIT</button></center>
                        </td>
                    </tr>
                </table>
            </form>
        </br>
    </center>
@endsection