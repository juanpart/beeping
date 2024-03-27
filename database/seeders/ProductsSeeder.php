<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsSeeder extends Seeder {
    public function run() {
        Factory::factoryForModel(Product::class)->count(10)->create();
    }
}