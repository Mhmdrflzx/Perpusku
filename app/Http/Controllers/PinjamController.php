<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pinjam;
use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjams = Pinjam::all();
        $bukus = Buku::all();

        return view('pinjam', compact('pinjams', 'bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if (auth()->check()) {
            $validatedData = $request->validate([
                'name' => 'required',
                'alamat' => 'required',
                'buku' => 'required',
                'nomor' => 'required',
                'pinjam' => 'required',
                'kembali' => 'required|date|after_or_equal:pinjam', // Tanggal kembali harus setelah atau sama dengan tanggal pinjam
            ]);

            // Menghitung perbedaan antara tanggal pinjam dan tanggal kembali dalam hari
        $tanggalPinjam = Carbon::createFromFormat('Y-m-d', $request->pinjam);
        $tanggalKembali = Carbon::createFromFormat('Y-m-d', $request->kembali);
        $perbedaanHari = $tanggalKembali->diffInDays($tanggalPinjam);

        // Memeriksa apakah perbedaan hari kurang dari atau sama dengan 7 hari
        if ($perbedaanHari > 7) {
            return redirect()->back()->with('error', 'Batas maksimal peminjaman adalah 7 hari');
        }
    
            $validatedData['status'] = 'blm-diproses';
            $validatedData['petugas'] = 'tidak diketahui';
    
            Pinjam::create($validatedData);
    
            return back()->with('success', 'Berhasil meminjam');
        } else {
            return back()->with('error', 'Gagal meminjam');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user()->id;
        $buku = Buku::findOrFail($id);
        $existingKoleksi = Koleksi::where('user_id', $user)->where('buku_id', $buku->id)->exists();
        return view('pinjam', compact('buku', 'existingKoleksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        return view('edit', compact('pinjam'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required',
            'petugas' => 'required',
        ]);

        $pinjam = Pinjam::findOrFail($id);
        $pinjam->update($validatedData);

        return redirect('/indexpinjam')->with('success', 'Berhasil mas!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->delete();
        return back()->with('success', 'Berhasil menghapus');
    }
}
