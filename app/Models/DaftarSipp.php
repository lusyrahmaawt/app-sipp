<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSipp extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ukm',
        'nama_lengkap',
        'alamat_lengkap',
        'alamat_produksi',
        'email_aktif',
        'no_hp',
        'nomer_nik',
        'nomer_npwp',
        'jenisusaha',
        'jenisproduk',
        'namaproduk',
        'no_nib',
        'sibakul',
        'kemasan',
        'tanggal_daftar',
        'user_id',
        'penjadwalan_id'
    ];
}

