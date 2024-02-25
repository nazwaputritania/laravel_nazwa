<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugass extends Model
{
    use HasFactory;

    protected $table = 'petugass';
    protected $primaryKey = 'id_petugass';
    protected $fillable =[
        'username', 'password', 'nama_petugas', 'level'
    ];
}
