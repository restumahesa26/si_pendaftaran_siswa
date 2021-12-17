<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'orang_tua_id', 'anak_id', 'pembayaran_id', 'ktp_ortu', 'kk', 'akta_kelahiran', 'pesan'
    ];

    public function anak()
    {
        return $this->hasOne(Anak::class, 'id', 'anak_id');
    }

    public function orang_tua()
    {
        return $this->hasOne(OrangTua::class, 'id', 'orang_tua_id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id', 'pembayaran_id');
    }

    public function wawancara()
    {
        return $this->hasOne(Wawancara::class, 'berkas_id', 'id');
    }
}
