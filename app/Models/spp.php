<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;

    protected $table = 'spps';
    protected $primaryKey = 'id_spps';
    protected $fillable =[
        'tahun', 'nominal',
    ];
}
