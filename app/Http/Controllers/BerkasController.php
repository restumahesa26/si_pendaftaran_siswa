<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public function index()
    {
        $items = Berkas::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.berkas.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $pembayaran = Pembayaran::where('orang_tua_id', Auth::user()->orang_tua->id)->where('status', 1)->get();

        return view('pages.user.berkas.create', [
            'pembayaran' => $pembayaran
        ]);
    }

    public function store(Request $request)
    {
        $pembayaran = Pembayaran::findOrFail($request->pembayaran_id);

        $check = Berkas::where('pembayaran_id', $request->pembayaran_id)->first();

        if ($check !== NULL) {
            return redirect()->route('berkas.create')->withInput()->with(['error' => 'Pilih Pembayaran Dengan Benar']);
        } else {
            $request->validate([
                'pembayaran_id' => 'required|numeric',
                'ktp_ortu' => 'required|image|mimes:png,jpg|max:1024',
                'kk' => 'required|image|mimes:png,jpg|max:1024',
                'akta_kelahiran' => 'required|image|mimes:png,jpg|max:1024',
            ]);

            $value = $request->file('ktp_ortu');
            $extension = $value->extension();
            $imageNames = uniqid('img_', microtime()) . '.' . $extension;
            Storage::putFileAs('public/assets/scan-ktp-ortu', $value, $imageNames);

            $value2 = $request->file('kk');
            $extension2 = $value2->extension();
            $imageNames2 = uniqid('img_', microtime()) . '.' . $extension2;
            Storage::putFileAs('public/assets/scan-kk', $value2, $imageNames2);

            $value3 = $request->file('akta_kelahiran');
            $extension3 = $value3->extension();
            $imageNames3 = uniqid('img_', microtime()) . '.' . $extension3;
            Storage::putFileAs('public/assets/scan-akta-kelahiran', $value3, $imageNames3);

            Berkas::create([
                'orang_tua_id' => Auth::user()->orang_tua->id,
                'anak_id' => $pembayaran->anak_id,
                'pembayaran_id' => $request->pembayaran_id,
                'ktp_ortu' => $imageNames,
                'kk' => $imageNames2,
                'akta_kelahiran' => $imageNames3,
            ]);

            return redirect()->route('berkas.index')->with(['success' => 'Berhasil Menambah Data Berkas']);
        }
    }

    public function edit($id)
    {
        $item = Berkas::findOrFail($id);
        $pembayaran = Pembayaran::where('orang_tua_id', Auth::user()->orang_tua->id)->where('status', 1)->get();

        return view('pages.user.berkas.edit', [
            'item' => $item, 'pembayaran' => $pembayaran
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Berkas::findOrFail($id);
        $check = Berkas::where('pembayaran_id', $request->pembayaran_id)->first();

        $request->validate([
            'pembayaran_id' => 'required|numeric',
        ]);

        if ($request->ktp_ortu) {
            $request->validate([
                'ktp_ortu' => 'required|image|mimes:png,jpg|max:1024',
            ]);
        }
        if ($request->kk) {
            $request->validate([
                'kk' => 'required|image|mimes:png,jpg|max:1024',
            ]);
        }
        if ($request->akta_kelahiran) {
            $request->validate([
                'akta_kelahiran' => 'required|image|mimes:png,jpg|max:1024',
            ]);
        }

        if ($item->pembayaran_id == $request->pembayaran_id) {
            if ($request->ktp_ortu) {
                $value = $request->file('ktp_ortu');
                $extension = $value->extension();
                $imageNames = uniqid('img_', microtime()) . '.' . $extension;
                Storage::putFileAs('public/assets/scan-ktp-ortu', $value, $imageNames);
            } else {
                $imageNames = $item->ktp_ortu;
            }

            if ($request->kk) {
                $value2 = $request->file('kk');
                $extension2 = $value2->extension();
                $imageNames2 = uniqid('img_', microtime()) . '.' . $extension2;
                Storage::putFileAs('public/assets/scan-kk', $value2, $imageNames2);
            } else {
                $imageNames2 = $item->kk;
            }

            if ($request->akta_kelahiran) {
                $value3 = $request->file('akta_kelahiran');
                $extension3 = $value3->extension();
                $imageNames3 = uniqid('img_', microtime()) . '.' . $extension3;
                Storage::putFileAs('public/assets/scan-akta-kelahiran', $value3, $imageNames3);
            } else {
                $imageNames3 = $item->akta_kelahiran;
            }

            $item->update([
                'pembayaran_id' => $request->pembayaran_id,
                'ktp_ortu' => $imageNames,
                'kk' => $imageNames2,
                'akta_kelahiran' => $imageNames3,
            ]);

            return redirect()->route('berkas.index')->with(['success' => 'Berhasil Mengubah Data Berkas']);

        }elseif ($check !== NULL) {
            return redirect()->route('berkas.edit', $id)->withInput()->with(['error' => 'Pilih Pembayaran Dengan Benar']);
        }
    }

    public function destroy($id)
    {
        $item = Berkas::findOrFail($id);

        $name = $item->ktp_ortu;
        $name2 = $item->kk;
        $name3 = $item->akta_kelahiran;

        $item->delete();

        $filename = ('public/assets/scan-ktp-ortu/') . $name;
        $filename2 = ('public/assets/scan-kk/') . $name2;
        $filename3 = ('public/assets/scan-akta-kelahiran/') . $name3;
        Storage::delete($filename);
        Storage::delete($filename2);
        Storage::delete($filename3);

        return redirect()->route('berkas.index')->with(['success' => 'Berhasil Menghapus Data Berkas']);
    }
}
