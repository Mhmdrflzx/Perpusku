<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();

        return view('indexuser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        if (auth()->check()) {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'role' => 'required',
                'alamat' => 'required',
                'nomor' => 'required',
                'password' => 'required',
            ]);
    
            user::create([
                'name' => $validatedData['name'], 
                'email' => $validatedData['email'],
                'role' => $validatedData['role'],
                'alamat' => $validatedData['alamat'],
                'nomor' => $validatedData['nomor'],
                'password' => $validatedData['password'],
            ]);
    
            return redirect('/indexuser')->with('success', 'Berhasil meminjam');
        
    }

}

public function destroy($id)
{
    $user = user::findOrFail($id);
    $user->delete();
    return back()->with('success', 'Berhasil menghapus');
}

}
