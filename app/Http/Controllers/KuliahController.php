<?php

namespace App\Http\Controllers;

use App\kuliah;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuliah = kuliah::paginate(15);
        return view('kuliah.index', compact('kuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kuliah::create($request->all());
        return redirect('/kuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kuliah  $kuliah
     * @return \Illuminate\Http\Response
     */
    public function show(kuliah $kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kuliah  $kuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(kuliah $kuliah)
    {
        // dd($kuliah);
        $kuliah = kuliah::findOrFail($kuliah);
        return view('kuliah.edit', compact('kuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kuliah  $kuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kuliah $kuliah)
    {
        $newkuliah = kuliah::findOrFail($kuliah);
        $newkuliah->update($request->all());
        return redirect('/kuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kuliah  $kuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(kuliah $kuliah)
    {
        $foundkuliah = kuliah::findOrFail($kuliah);
        $foundkuliah->delete();
        return redirect('/kuliah');
    }
    public function search(Request $r)
    {
        $cari = $r->get('search');
        $kuliah = kuliah::where('matakuliah','LIKE', '%'.$cari . '%')->paginate(100);
        return view ('kuliah.index',compact('kuliah'));
    }
}
