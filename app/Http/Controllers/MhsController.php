<?php

namespace App\Http\Controllers;

use DB;
use App\mhs;
use App\dosen;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = DB::table('mhs')->join('dosens', 'mhs.nipdosenwali', '=', 'dosens.nip')->paginate(15);
        return view('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = dosen::pluck('namadosen', 'nip');
        return view('mhs.create', compact('dsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mhs::create($request->all());
        return redirect('/mhs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(mhs $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = mhs::findOrFail($id);
        $dsn = dosen::pluck('namadosen', 'nip');
        return view('mhs.edit', compact('mhs', 'dsn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $mhsnya = mhs::findorfail($id);
      $mhsnya->update($request->all());
      return redirect('/mhs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhsnya = mhs::findOrFail($id);
        $mhsnya->delete();
        return redirect('/mhs');
    }

    public function search(Request $r)
    {
        $cari = $r->get('search');
        $mhs = mhs::where('nama','LIKE', '%'.$cari . '%')->paginate(100);
        return view ('mhs.index',compact('mhs'));
    }
}
