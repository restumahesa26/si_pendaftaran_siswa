<?php

namespace App\Http\Controllers;

use App\Models\Wawancara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WawancaraController extends Controller
{
    public function index()
    {
        $items = Wawancara::where('orang_tua_id', Auth::user()->orang_tua->id)->get();

        return view('pages.user.wawancara.index', [
            'items' => $items
        ]);
    }
}
