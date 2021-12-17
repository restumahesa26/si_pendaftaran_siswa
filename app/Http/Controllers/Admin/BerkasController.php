<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Wawancara;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $items = Berkas::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.berkas.index', [
            'items' => $items
        ]);
    }

    public function konfirmasi_berkas($id)
    {
        $item = Berkas::findOrFail($id);

        $item->status = 1;
        $item->pesan = 'Lanjutkan ke Tahap Wawancara';
        $item->save();

        return redirect()->route('admin-berkas.index')->with(['success' => 'Berhasil Mengkonfirmasi Berkas']);
    }

    public function batal_berkas(Request $request, $id)
    {
        $item = Berkas::findOrFail($id);

        $request->validate([
            'pesan' => 'required|string|max:255'
        ]);

        $item->status = 0;
        $item->pesan = $request->pesan;
        $item->save();

        $wawancara = Wawancara::where('berkas_id', $id)->first();

        $wawancara->delete();

        return redirect()->route('admin-berkas.index')->with(['success' => 'Berhasil Membatalkan Konfirmasi Berkas']);
    }

    public function set_wawancara(Request $request, $id)
    {
        $item = Berkas::findOrFail($id);

        $check = Wawancara::where('berkas_id', $id)->first();

        $request->validate([
            'jadwal' => 'required|date'
        ]);

        if ($check !== NULL) {
            $check->update([
                'jadwal' => $request->jadwal
            ]);
        } else {
            Wawancara::create([
                'orang_tua_id' => $item->orang_tua_id,
                'anak_id' => $item->anak_id,
                'pembayaran_id' => $item->pembayaran_id,
                'berkas_id' => $id,
                'jadwal' => $request->jadwal
            ]);
        }

        return redirect()->route('admin-berkas.index')->with(['success' => 'Berhasil Memberikan Jadwal Wawancara']);
    }
}
