<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model
{
    use HasFactory;

    protected $fillable = [
        'orang_tua_id', 'anak_id', 'pembayaran_id', 'berkas_id', 'jadwal'
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

    public function berkas()
    {
        return $this->hasOne(Berkas::class, 'id', 'berkas_id');
    }
}
