<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function index()
    // {
    //     $posts = post::paginate(10); // Mengambil 10 data per halaman

    //     return view('posts', compact('posts'));
    // }

    // public function pinjam(Request $request) {
    //     $data = $request->validate([
    //         'ulasan' => 'required|max:150'
    //     ]); 

    //     Ulasan::create($data);
    //     return redirect('/ulasan')
    // }


}
