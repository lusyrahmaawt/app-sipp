<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'tempat_kegiatan',
        'keterangan',
    ];
}
