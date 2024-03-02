<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('koleksi', compact('koleksi'));
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;
        
        $validate = $request->validate([
            'buku_id' => ['required']
        ]);
        $validate['user_id'] = $user;

        $existingKoleksi = Koleksi::where('user_id', $user)->where('buku_id', $validate['buku_id'])->first();

        if ($existingKoleksi) {
            $existingKoleksi->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus buku dari koleksi');
        } else {
            Koleksi::create($validate);
            return redirect()->back()->with('success', 'Berhasil menyimpan buku');
        }
    }
}
