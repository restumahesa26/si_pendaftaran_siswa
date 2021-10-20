<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'orang_tua_id', 'anak_id', 'bukti_pembayaran', 'status'
    ];

    public function anak()
    {
        return $this->hasOne(Anak::class, 'id', 'anak_id');
    }

    public function orang_tua()
    {
        return $this->hasOne(OrangTua::class, 'id', 'orang_tua_id');
    }
}
