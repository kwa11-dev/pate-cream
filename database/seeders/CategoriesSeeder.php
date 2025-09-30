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
            ['name' => 'crepe', 'image' => 'category_crepe.jpg'],
            ['name' => 'mighty crepe', 'image' => 'category_mighty_crepe.jpg'],
            ['name' => 'Bubble Waffle', 'image' => 'category_bubble_waffle.jpg'],
            ['name' => 'Circle Waffle', 'image' => 'category_circle_waffle.jpg'],
            ['name' => 'Donuts Waffle', 'image' => 'category_donuts_waffle.jpg'],
            ['name' => 'Square Waffle', 'image' => 'category_square_waffle.jpg'],
            ['name' => 'Stick Waffle', 'image' => 'category_stick_waffle.jpg'],
            ['name' => 'Mini Pancake Balls', 'image' => 'category_mini_pancake_balls.jpg'],
            ['name' => 'Pancake', 'image' => 'category_pancake.jpg'],
            ['name' => 'small Pancake', 'image' => 'category_small_pancake.jpg'],
            ['name' => 'Cups', 'image' => 'category_cups.jpg'],
            ['name' => 'Merry cream cone', 'image' => 'category_merry_cream_cone.jpg'],
            ['name' => 'Merry cream cup', 'image' => 'category_merry_cream_cup.jpg'],
            ['name' => 'Desserts', 'image' => 'category_desserts.jpg'],
            ['name' => 'Intab Cake', 'image' => 'category_intab_cake.jpg'],
            ['name' => 'Mou', 'image' => 'category_mou.jpg'],
            ['name' => 'Profiterole', 'image' => 'category_profiterole.jpg'],
            ['name' => 'Fettuccine', 'image' => 'category_fettuccine.jpg'],
            ['name' => 'Water', 'image' => 'category_water.jpg'],
            ['name' => 'Gym Items', 'image' => 'category_gym_items.jpg'],
            ['name' => 'قشطوطة', 'image' => 'category_kashtota.jpg'],
        ];

        DB::table('categories')->insert($categories);
    }
}
