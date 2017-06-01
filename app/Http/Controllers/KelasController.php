<?php

namespace App\Http\Controllers;

use DB;
use App\kelas;
use App\kuliah;
use App\dosen;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->join('kuliahs', 'kuliahs.kodekuliah', '=', 'kelas.kuliah_pemakai')
                ->join('dosens', 'dosens.nip', '=', 'kelas.nip_pengajar')->paginate(15);
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $klh = kuliah::pluck('matakuliah', 'kodekuliah');
        $dsn = dosen::pluck('namadosen', 'nip');
        // dd($klh);
        return view('kelas.create', compact('klh', 'dsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kelas::create($request->all());
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas)
    {

        $kelas = kelas::findOrFail($kelas);
        $kuliah = kuliah::pluck('matakuliah', 'kodekuliah');
        $dosen = dosen::pluck('namadosen', 'nip');
        return view('kelas.edit', compact('kelas', 'kuliah', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        $kelasnya = kelas::findOrFail($kelas);
        $kelasnya->update($request->all());
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas)
    {
        $kelasnya = kelas::findOrFail($kelas);
        $kelasnya->delete();
        return redirect('/kelas');
    }

    public function search(Request $r)
    {
        $cari = $r->get('search');
        $kelas = DB::table('kelas')->join('kuliahs', 'kuliahs.kodekuliah', '=', 'kelas.kuliah_pemakai')
                ->join('dosens', 'dosens.nip', '=', 'kelas.nip_pengajar')->where('kuliahs.matakuliah','LIKE', '%'.$cari . '%')->paginate(100);
        return view ('kelas.index',compact('kelas'));
    }
}
