<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $items = Pembayaran::orderBy('status', 'ASC')->get();

        return view('pages.admin.pembayaran.index', [
            'items' => $items
        ]);
    }

    public function konfirmasi_pembayaran($id)
    {
        $item = Pembayaran::findOrFail($id);

        $item->status = 1;
        $item->save();

        return redirect()->route('admin-pembayaran.index');
    }

    public function batal_pembayaran($id)
    {
        $item = Pembayaran::findOrFail($id);

        $item->status = 0;
        $item->save();

        return redirect()->route('admin-pembayaran.index');
    }

    public function hapus_pembayaran($id)
    {
        $item = Pembayaran::findOrFail($id);

        $item->delete();

        return redirect()->route('admin-pembayaran.index');
    }
}
