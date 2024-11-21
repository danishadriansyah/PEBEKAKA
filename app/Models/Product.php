<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'products'; // Ganti dengan nama tabel yang sesuai

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image', 
        'category_id' // Ganti dengan nama kolom yang menyimpan ID kategori
    ];

    // Definisikan relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class); // Relasi banyak ke satu
    }
}
