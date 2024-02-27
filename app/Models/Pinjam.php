<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'alamat', 'buku', 'nomor', 'pinjam', 'kembali', 'status', 'petugas',];
}
