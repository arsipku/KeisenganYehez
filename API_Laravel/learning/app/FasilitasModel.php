<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasModel extends Model
{
    protected $table = "fasilitas_umn";

    protected $fillable = [
        'nama_fasilitas',
        'fakultas',
        'deskripsi_fasilitas',
        'foto_fasilitas'
    ];
}
