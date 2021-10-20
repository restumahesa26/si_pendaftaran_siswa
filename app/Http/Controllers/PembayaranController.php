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
        $check = Pembayaran::where('anak_id', $request->anak_id)->first();

        if($check !== NULL) {
            return redirect()->route('pembayaran.index');
        }else {
            $value = $request->file('bukti_pembayaran');
            $extension = $value->extension();
            $imageNames = uniqid('img_', microtime()) . '.' . $extension;
            Storage::putFileAs('public/assets/bukti-pembayaran', $value, $imageNames);

            Pembayaran::create([
                'orang_tua_id' => Auth::user()->orang_tua->id,
                'anak_id' => $request->anak_id,
                'bukti_pembayaran' => $imageNames,
            ]);

            return redirect()->route('pembayaran.index');
        }
    }

    public function delete($id)
    {
        $item = Pembayaran::findOrFail($id);

        $item->delete();

        return redirect()->route('pembayaran.index');
    }
}
