<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkmModel extends Model
{
    protected $table = "ukm";

    protected $fillable = [
        'nama_ukm',
        'foto_ukm',
        'jumlah_anggota',
        'deskripsi'
    ];
}
