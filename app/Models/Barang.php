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
        'satuan',
        'deskripsi',
        'id_kategori'
    ];
    
    protected $table = 'barang';

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class,'id_kategori');
    }
   
}
