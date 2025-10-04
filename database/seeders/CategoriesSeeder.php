<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'crepe', 'image' => 'images/categories/category_crepe.jpg'],
            ['name' => 'mighty crepe', 'image' => 'images/categories/category_mighty_crepe.jpg'],
            ['name' => 'Bubble Waffle', 'image' => 'images/categories/category_bubble_waffle.jpg'],
            ['name' => 'Circle Waffle', 'image' => 'images/categories/category_circle_waffle.jpg'],
            ['name' => 'Donuts Waffle', 'image' => 'images/categories/category_donuts_waffle.jpg'],
            ['name' => 'Square Waffle', 'image' => 'images/categories/category_square_waffle.jpg'],
            ['name' => 'Stick Waffle', 'image' => 'images/categories/category_stick_waffle.jpg'],
            ['name' => 'Mini Pancake Balls', 'image' => 'images/categories/category_mini_pancake_balls.jpg'],
            ['name' => 'Pancake', 'image' => 'images/categories/category_pancake.jpg'],
            ['name' => 'small Pancake', 'image' => 'images/categories/category_small_pancake.jpg'],
            ['name' => 'Cups', 'image' => 'images/categories/category_cups.jpg'],
            ['name' => 'Merry cream cone', 'image' => 'images/categories/category_merry_cream_cone.jpg'],
            ['name' => 'Merry cream cup', 'image' => 'images/categories/category_merry_cream_cup.jpg'],
            ['name' => 'Desserts', 'image' => 'images/categories/category_desserts.jpg'],
            ['name' => 'Intab Cake', 'image' => 'images/categories/category_intab_cake.jpg'],
            ['name' => 'Mou', 'image' => 'images/categories/category_mou.jpg'],
            ['name' => 'Profiterole', 'image' => 'images/categories/category_profiterole.jpg'],
            ['name' => 'Fettuccine', 'image' => 'images/categories/category_fettuccine.jpg'],
            ['name' => 'Water', 'image' => 'images/categories/category_water.jpg'],
            ['name' => 'Gym Items', 'image' => 'images/categories/category_gym_items.jpg'],
            ['name' => 'قشطوطة', 'image' => 'images/categories/category_kashtota.jpg'],
            ['name' => 'add One', 'image' => 'images/categories/category_add_one.jpg']
        ];

        DB::table('categories')->insert($categories);
    }
}
