<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Mengajar;
use App\Models\Nilai;
use Illuminate\Http\Request;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('mengajar.index', [
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
            'guru' => Guru::all(),
            'mengajar' => Mengajar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mengajar.create', [
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
            'guru' => Guru::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);
        Mengajar::create($request->all());
        return redirect('/mengajar/index')->with('success', "Data Mengajar Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mengajar $mengajar)
    {
        //
        return view('mengajar.edit', [
            'mengajar' => $mengajar,
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
            'guru' => Guru::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengajar $mengajar)
    {
        //
        $request->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);
        $mengajar->update($request->all());
        return redirect('/mengajar/index')->with('success', "Data Mengajar Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        
        // $nilai = Mengajar::where('mengajar_id', $mengajar->id);

        // if($nilai) {
        //     return back()->with('error', 'Data mengajar masih dipakai di menu nilai');
        // }

        $mengajar->delete();
        return back()->with('success', "Data Mengajar Berhasil Dihapus");
        
    }
}
