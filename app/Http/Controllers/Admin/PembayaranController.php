<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $items = Pembayaran::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.pembayaran.index', [
            'items' => $items
        ]);
    }

    public function konfirmasi_pembayaran($id)
    {
        $item = Pembayaran::findOrFail($id);

        $item->status = 1;
        $item->pesan = 'Lanjutkan ke Tahap Berkas';
        $item->save();

        return redirect()->route('admin-pembayaran.index');
    }

    public function batal_pembayaran(Request $request, $id)
    {
        $item = Pembayaran::findOrFail($id);

        $request->validate([
            'pesan' => 'required|string|max:255'
        ]);

        $item->status = 0;
        $item->pesan = $request->pesan;
        $item->save();

        return redirect()->route('admin-pembayaran.index');
    }
}
