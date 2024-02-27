<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('indexbuku', compact('bukus'));
    }

    public function create()
    {
        return view('createbuku');
    }

    public function store(Request $request)
    {   
        // bukus::create($request->except('_token'));
        // dd($request->file('foto'));
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        $nama = time() . '.' . $extension;
        $foto->move('Photo', $nama);

        
        $data = new buku;
        $data->buku = $request->input('buku');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->tahun = $request->input('tahun');
        $data->deskripsi = $request->input('deskripsi');
        $data->foto = $nama;

        $data->save();
        return redirect('/indexbuku')->with('success', 'Berhasil meminjam');
        

    }
    public function edit(Buku $buku)
    {
        return view('editbuku', [
            'buku' => $buku
        ]);

    }
    public function update($id, Request $request)
    {
        // $data= buku::find($id);
        // $data->update($request->except('_token'));
        $data = buku::find($id);

        $data->buku = $request->input('buku');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->tahun = $request->input('tahun');
        $data->deskripsi = $request->input('deskripsi');

        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('Photo'), $filename);
        
        //     // Menghapus foto lama jika ada
        //     if (!empty($data->foto)) {
        //         $oldFilePath = public_path('Photo/' . $data->foto);
        //         if (file_exists($oldFilePath)) {
        //             unlink($oldFilePath);
        //         }
        //     }
        
        //     $data->foto = $filename;
        // }
        
        
        $data->update();
        return redirect('/indexbuku')->with('success', 'Berhasil mas!');
    }


    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();
        return back()->with('success', 'Berhasil menghapus');
    }


}
