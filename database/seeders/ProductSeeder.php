<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Beras Premium 25kg',
                'description' => 'Beras putih kualitas super untuk restoran dan hotel. Butir panjang, pulen, dan tahan lama.',
                'price' => 285000,
                'stock' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minyak Goreng Sawit 18L',
                'description' => 'Minyak goreng curah dalam jerigen 18 liter, cocok untuk skala besar seperti katering dan rumah makan.',
                'price' => 245000,
                'stock' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gula Pasir Putih 50kg',
                'description' => 'Gula kristal putih kualitas tinggi untuk kebutuhan industri makanan dan minuman.',
                'price' => 720000,
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tepung Terigu Segitiga Biru 25kg',
                'description' => 'Tepung terigu serbaguna untuk pabrik roti, bakery, dan produsen makanan ringan.',
                'price' => 240000,
                'stock' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Telur Ayam Ras (1 Peti 15kg)',
                'description' => 'Telur ayam segar dalam kemasan peti plastik isi ±240 butir. Cocok untuk hotel, bakery, dan distributor.',
                'price' => 370000,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
