<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Fashion']);
        Category::create(['name' => 'Gadget']);
        Category::create(['name' => 'Botol Minum']);
    }
}
