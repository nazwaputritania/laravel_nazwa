<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spps = DB::table('spps')->get();
        return view('spp.index', compact('spps'));
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'tahun' =>'required',
            'nominal' =>'required',
        ]);

        $query = DB::table('spps')->insert([
            'tahun'  => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);

        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil ditambahkan']);;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sppsShow = DB::table('spps')->where('id_spps', $id)->first();
        return view('spp.show', compact('sppsShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //Mengambil data dari database
        $spp = DB::table('spps')->where('id_spps', $id)->first();
        // menampilkan view edit data
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
            //validasi data inputan data wajib diisi dan minimal 5 karakter
            $request->validate([
                'tahun'  =>'required',
                'nominal' =>'required',
            ]);
    
            // Query Untuk menyimpan data
            $query = DB::table('spps')
            ->where('id_spps', $id)
            ->update([
                'tahun'  => $request['tahun'],
                'nominal' => $request['nominal'],
            ]);
            // Jika data disimpan maka di redirect ke halaman index
            return redirect()->route('spp.index')->with(['success' => 'Data Berhasil diupdate']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spps = DB::table('spps')->where('id_spps', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}
