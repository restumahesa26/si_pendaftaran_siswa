<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnakController extends Controller
{
    public function index()
    {
        $items = Anak::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.data-anak.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.user.data-anak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:40'],
            'tempat_lahir' => ['required', 'string', 'max:30'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'agama' => ['required', 'string', 'max:15'],
            'golongan_darah' => ['required', 'string', 'max:15'],
            'alamat' => ['required', 'string', 'max:50'],
            'jenjang' => ['required', 'in:PAUD,TK,SD'],
        ]);

        Anak::create([
            'orang_tua_id' => Auth::user()->orang_tua->id,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'alamat' => $request->alamat,
            'jenjang' => $request->jenjang,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'hubungan_dengan_wali' => $request->hubungan_dengan_wali,
        ]);

        return redirect()->route('data-anak.index');
    }

    public function edit($id)
    {
        $item = Anak::findOrFail($id);

        return view('pages.user.data-anak.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Anak::findOrFail($id);

        $request->validate([
            'nama' => ['required', 'string', 'max:40'],
            'tempat_lahir' => ['required', 'string', 'max:30'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'agama' => ['required', 'string', 'max:15'],
            'golongan_darah' => ['required', 'string', 'max:15'],
            'alamat' => ['required', 'string', 'max:50'],
            'jenjang' => ['required', 'in:PAUD,TK,SD'],
        ]);

        $item->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'alamat' => $request->alamat,
            'jenjang' => $request->jenjang,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'hubungan_dengan_wali' => $request->hubungan_dengan_wali,
        ]);

        return redirect()->route('data-anak.index');
    }

    public function delete($id)
    {
        $item = Anak::findOrFail($id);

        $item->delete();

        return redirect()->route('data-anak.index');
    }
}
