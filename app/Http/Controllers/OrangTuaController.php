<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class OrangTuaController extends Controller
{
    public function profile()
    {
        $item = OrangTua::where('user_id', Auth::user()->id)->first();

        return view('pages.user.profile.show', [
            'item' => $item
        ]);
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
        ]);

        $item = OrangTua::where('user_id', Auth::user()->id)->first();
        $user = User::findOrFail(Auth::user()->id);

        if($request->email !== $user->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }

        if($request->password) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }

        $item->update([
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
        ]);

        $user->nama = $request->nama;
        $user->email = $request->email;
        if($request->password) {
            $user->password = $request->password;
        }
        $user->save();

        return redirect()->route('profile.show')->with(['success' => 'Berhasil Mengubah Profile']);
    }
}
