<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakananModel extends Model
{
    protected $table = 'makanan_kantin';

    protected $fillable = [
        'nama_makanan',
        'kategori_makanan',
        'deskripsi',
        'foto_makanan'
    ];
}
