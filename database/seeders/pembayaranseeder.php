<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugassIds = DB::table('petugass')->pluck('id_petugass');
        $siswasNisns = DB::table('siswas')->pluck('nisn');
        $sppsIds = DB::table('spps')->pluck('id_spps');
        //
        DB::table('pembayarans')->insert([
            'id_petugass'=>$petugassIds->random(),
            'nisn' => $siswasNisns->random(),
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(8),
            'tahun_dibayar' => Str::random(4),
            'id_spps'=>$sppsIds->random(),
            'jumlah_bayar' => random_int(100000, 900000),
        ]);
    }
}
