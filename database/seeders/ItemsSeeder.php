<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'category_id' => 1,
                'name' => 'Classic Crepe',
                'image' => 'crepe_nutella.jpg',
                'description' => 'A delicious classic crepe with your choice of filling.',
                'price' => 300000,
                'is_sale' => false,
                'sale_price' => null,
            ],
            [
                'category_id' => 3,
                'name' => 'Bubble Waffle Special',
                'image' => 'crepe_oreo.jpg',
                'description' => 'Our famous bubble waffle topped with chocolate and ice cream.',
                'price' => 300000,
                'is_sale' => true,
                'sale_price' => 200000,
            ],
            [
                'category_id' => 5,
                'name' => 'Donuts Waffle Combo',
                'image' => 'crepe_white.jpg',
                'description' => 'Sweet donut waffle served with a scoop of ice cream.',
                'price' => 300000,
                'is_sale' => false,
                'sale_price' => null,
            ],
            [
                'category_id' => 8,
                'name' => 'Mini Pancake Balls',
                'image' => 'lotus_crepe.jpg',
                'description' => 'Bite-sized pancake balls, perfect for snacking.',
                'price' => 300000,
                'is_sale' => true,
                'sale_price' => 200000,
            ],
            [
                'category_id' => 12,
                'name' => 'Merry Cream Cone',
                'image' => 'mix_flavors_circle_waffle.jpg',
                'description' => 'Creamy ice cream cone topped with sprinkles.',
                'price' => 300000,
                'is_sale' => false,
                'sale_price' => null,
            ],
            [
                'category_id' => 15,
                'name' => 'Intab Cake Slice',
                'image' => 'mix_flavors_donuts_waffle.jpg',
                'description' => 'A slice of our signature Intab cake.',
                'price' => 300000,
                'is_sale' => true,
                'sale_price' => 200000,
            ],
        ];

        DB::table('items')->insert($items);
    }
}
