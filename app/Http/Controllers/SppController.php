<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Http\Requests\StoresppRequest;
use App\Http\Requests\UpdatesppRequest;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spp = spp::select('id_spps', 'tahun', 'nominal')->get();
        return view('spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresppRequest $request, spp $spp)
    {
        //
        $spp->create($request->all());
        // dd ($request->all());
        return redirect()->route('spp.index')
        ->with(['success'=>'Data  ' .$request ['tahun'] .' berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(spp $spp)
    {
        //
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spp $spp)
    {
        //
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesppRequest $request, spp $spp)
    {
        //
        $spp->update($request->all());
    return redirect()->route('spp.index')->with(['success'=> 'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spp $spp)
    {
        //
        $spp->delete();
        return redirect()->route('spp.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
