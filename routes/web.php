<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UserController;
use App\Models\Buku;
use App\Models\Pinjam;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::view('/admin', 'admin');
    });
    
    

    // Route::middleware(['petugas'])->group(function () {
    //     Route::view('/admin', 'admin');
    // });

    //ulasan
    Route::resource('/ulasan', UlasanController::class);
    //pinjam
    Route::resource('/pinjam', PinjamController::class); 

    Route::resource('/indexpinjam', PinjamController::class);

    Route::view('/indexpinjam', 'indexpinjam', [
        'pinjams' => Pinjam::orderBy('id', 'desc')->get()
    ]);

    Route::get('/pinjam/{id}/edit', [PinjamController::class, 'edit'])->name('pinjam.edit');

    Route::put('/pinjam/{id}', [PinjamController::class, 'update'])->name('pinjam.update');


    //create buku
    Route::get('/indexbuku', [BukuController::class, 'index']);

    Route::get('/createbuku', [BukuController::class, 'create']);

    Route::post('/createbuku',  [BukuController::class, 'store']);

    Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');

    Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');

    //create user
    Route::get('/indexuser', [UserController::class, 'index']);

    Route::get('/createuser', [UserController::class, 'create']);

    Route::post('/createuser',  [UserController::class, 'store']);

    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    // koleksi
    Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');
    Route::post('/koleksi/store', [KoleksiController::class, 'store'])->name('koleksi.store');
    



    // Route::resource('/createbuku', BukuController::class);

    // Route::post('/createbuku', [BukuController::class, 'store'])->name('buku.store');

    // Route::view('/createbuku', 'createbuku', [
    //     'bukus' => Buku::orderBy('id', 'desc')->get()
    // ]);


    
// Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
// Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
// Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
// Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
// Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
// Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');


});


