<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    
    protected $fillable = ['buku', 'penulis', 'penerbit', 'tahun', 'deskripsi', 'foto',];

    public function koleksis(): HasMany
    {
        return $this->hasMany(Koleksi::class);
    }
}
