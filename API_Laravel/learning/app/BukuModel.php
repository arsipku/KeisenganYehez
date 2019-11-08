<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table = "buku_perpustakaan";

    protected $fillable = [
        'judul_buku',
        'pengarang',
        'penerbit',
        'kategori',
        'foto_sampul_buku'
    ];
}
