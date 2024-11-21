<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('name'); // Kolom untuk nama produk
            $table->text('description'); // Kolom untuk deskripsi produk
            $table->decimal('price', 10, 2); // Kolom untuk harga produk (10 digit total, 2 digit desimal)
            $table->unsignedInteger('stock'); // Kolom untuk jumlah stok produk
            $table->string('image')->nullable(); // Kolom untuk menyimpan nama gambar produk (nullable jika tidak selalu ada)
            $table->string('category')->nullable(); // Menambahkan kolom category
            $table->unsignedBigInteger('category_id')->nullable(); // menambahkan kolom category_id
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Menghapus tabel jika rollback migrasi
    }
};
