<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function index()
    {
        $items = Pembayaran::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.pembayaran.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $anak = Anak::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.pembayaran.create', [
            'anaks' => $anak
        ]);
    }

    public function store(Request $request)
    {
        $check = Pembayaran::where('anak_id', $request->anak_id)->where('jenjang', $request->jenjang)->first();

        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:png,jpg|max:1024',
            'anak_id' => 'required|numeric',
            'jenjang' => 'required|in:Pre School,Pre Kindy,Elementary School'
        ]);

        if($check !== NULL) {
            return redirect()->route('pembayaran.create')->withInput()->with(['error' => 'Pilih Anak dan Jenjang Dengan Benar']);
        }else {
            $value = $request->file('bukti_pembayaran');
            $extension = $value->extension();
            $imageNames = uniqid('img_', microtime()) . '.' . $extension;
            Storage::putFileAs('public/assets/bukti-pembayaran', $value, $imageNames);

            Pembayaran::create([
                'orang_tua_id' => Auth::user()->orang_tua->id,
                'anak_id' => $request->anak_id,
                'jenjang' => $request->jenjang,
                'bukti_pembayaran' => $imageNames,
            ]);

            return redirect()->route('pembayaran.index')->with(['success' => 'Berhasil Menambah Data Pembayaran']);
        }
    }

    public function edit($id)
    {
        $item = Pembayaran::findOrFail($id);
        $anak = Anak::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.pembayaran.edit', [
            'item' => $item, 'anaks' => $anak
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Pembayaran::findOrFail($id);

        $check = Pembayaran::where('anak_id', $request->anak_id)->where('jenjang', $request->jenjang)->first();

        $request->validate([
            'anak_id' => 'required|numeric',
            'jenjang' => 'required|in:Pre School,Pre Kindy,Elementary School'
        ]);

        if ($request->bukti_pembayaran) {
            $request->validate([
                'bukti_pembayaran' => 'required|image|mimes:png,jpg|max:1024',
            ]);
        }

        if ($check->jenjang == $request->jenjang) {
            if ($request->bukti_pembayaran) {
                $value = $request->file('bukti_pembayaran');
                $extension = $value->extension();
                $imageNames = uniqid('img_', microtime()) . '.' . $extension;
                Storage::putFileAs('public/assets/bukti-pembayaran', $value, $imageNames);
            } else {
                $imageNames = $item->bukti_pembayaran;
            }

            $item->update([
                'anak_id' => $request->anak_id,
                'jenjang' => $request->jenjang,
                'bukti_pembayaran' => $imageNames,
            ]);

            return redirect()->route('pembayaran.index')->with(['success' => 'Berhasil Mengubah Data Pembayaran']);

        }elseif ($check !== NULL) {
            return redirect()->route('pembayaran.edit', $id)->withInput()->with(['error' => 'Pilih Anak dan Jenjang Dengan Benar']);
        }
    }

    public function destroy($id)
    {
        $item = Pembayaran::findOrFail($id);

        $name = $item->bukti_pembayaran;

        $item->delete();

        $filename = ('public/assets/bukti-pembayaran/') . $name;
        Storage::delete($filename);

        return redirect()->route('pembayaran.index')->with(['success' => 'Berhasil Menghapus Data Pembayaran']);
    }
}
