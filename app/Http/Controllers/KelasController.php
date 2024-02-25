<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelass = Kelas::select('id_kelass', 'nama_kelas', 'kompetensi_keahlian')->get();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request, kelas $kelas)
    {
        //
        $kelas->create($request->all());
        // dd ($request->all());
        return redirect()->route('kelas.index')
        ->with(['success'=>'Data  ' .$request ['nama_kelas'] .' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
        return view('kelas.show', compact('kelas'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
        return view('kelas.edit',  compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        //
    $kelas->update($request->all());
    return redirect()->route('kelas.index')->with(['success'=> 'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
        $kelas->delete();
        return redirect()->route('kelas.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
