<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orangTua = User::where('role', 'USER')->count();
        $pembayaran = Pembayaran::where('status', 0)->count();
        $berkas2 = Berkas::where('status', 1)->count();
        $berkas = Berkas::where('status', 0)->count();

        return view('pages.admin.dashboard', [
            'orangTua' => $orangTua, 'pembayaran' => $pembayaran, 'berkas2' => $berkas2, 'berkas' => $berkas
        ]);
    }
}
