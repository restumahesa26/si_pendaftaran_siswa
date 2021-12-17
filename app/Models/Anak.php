<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'orang_tua_id', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'golongan_darah', 'alamat', 'nama_wali', 'pekerjaan_wali', 'alamat_wali', 'hubungan_dengan_wali'
    ];

    public function orang_tua()
    {
        return $this->hasOne(User::class, 'id', 'orang_tua_id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'anak_id', 'id');
    }
}
