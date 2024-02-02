<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelassIds = DB::table('kelass')->pluck('id_kelass');
        $sppsIds = DB::table('spps')->pluck('id_spps');
        //
        DB::table('siswas')->insert([
            'nisn' => Str::random(10),
            'nis' => Str::random(8),
            'nama' => Str::random(35),
            'id_kelass'=>$kelassIds->random(),
            'alamat' => Str::random(),
            'no_telp' => Str::random(13),
            'id_spps'=>$sppsIds->random(),
        ]);
    }
}
