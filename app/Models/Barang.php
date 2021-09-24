<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'keterangan',
        'deskripsi',
        'id_kategori'
    ];
    
    protected $table = 'barang';
}
