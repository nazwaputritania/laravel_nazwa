<?php

namespace App\Http\Controllers;

use App\Models\petugass;
use App\Http\Requests\StorepetugassRequest;
use App\Http\Requests\UpdatepetugassRequest;

class PetugassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugass = petugass::select('id_petugass', 'username', 'password', 'nama_petugas', 'level')->get();
        return view('petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepetugassRequest $request, petugass $petugass)
    {
        //
        $petugass->create($request->all());
        // dd ($request->all());
        return redirect()->route('petugas.index')
        ->with(['success'=>'Data  ' .$request ['username'] .' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(petugass $petugas)
    {
        //
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(petugass $petugas)
    {
        //
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepetugassRequest $request, petugass $petugas)
    {
        //
        $petugas->update($request->all());
    return redirect()->route('petugas.index')->with(['success'=> 'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(petugass $petugas)
    {
        //
        $petugas->delete();
        return redirect()->route('petugas.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
