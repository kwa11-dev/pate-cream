<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * Category IDs based on CategoriesSeeder order
         */
        $categories = [
            'Crepe' => 1,
            'Mighty Crepe' => 2,
            'Bubble Waffle' => 3,
            'Circle Waffle' => 4,
            'Donuts Waffle' => 5,
            'Square Waffle' => 6,
            'Stick Waffle' => 7,
            'Mini Pancake Balls' => 8,
            'Pancake' => 9,
            'Small Pancake' => 10,
            'Cups' => 11,
            'Merry Cream Cone' => 12,
            'Merry Cream Cup' => 13,
            'Desserts' => 14,
            'Intab Cake' => 15,
            'Mou' => 16,
            'Profiterole' => 17,
            'Fettuccine' => 18,
            'Water' => 19,
            'Gym Items' => 20,
            'قشطوطة' => 21,
            'Add One' => 22,
            'Others' =>23
        ];

        $rawItems = [
            // Add One
            ['Add Banana', 'Add One', 50000],
            ['Add Brownie Cake', 'Add One', 50000],
            ['Add Ice Cream Ball', 'Add One', 100000],
            ['Add Lotus Biscuits', 'Add One', 50000],
            ['Add Oreo Biscuits', 'Add One', 50000],
            ['Add Peach', 'Add One', 100000],
            ['Add Pistachio Topping', 'Add One', 100000],
            ['Add Spread Topping', 'Add One', 50000],
            ['Add Strawberry', 'Add One', 200000],
            ['Any Spread Shot', 'Add One', 100000],
            ['Belgium Chocolate Shot', 'Add One', 300000],
            ['Pistachio Shot', 'Add One', 200000],

            // Intab Cake
            ['Intab Pistachio', 'Intab Cake', 400000],
            ['Intab Belgium', 'Intab Cake', 450000],

            // Bubble Waffle
            ['Add Ball Ice Cream', 'Bubble Waffle', 100000],
            ['Add Fruits', 'Bubble Waffle', 150000],
            ['Belgium Bubble Waffle', 'Bubble Waffle', 550000],
            ['Dark Bubble Waffle', 'Bubble Waffle', 400000],
            ['Galaxy Bubble Waffle', 'Bubble Waffle', 400000],
            ['Ice Cream Ball Bubble Waffle', 'Bubble Waffle', 400000],
            ['Italian Bubble Waffle', 'Bubble Waffle', 400000],
            ['Lotus Bubble Waffle', 'Bubble Waffle', 450000],
            ['Merry Cream Bubble Waffle', 'Bubble Waffle', 500000],
            ['Mix Flavors Bubble Waffle', 'Bubble Waffle', 500000],
            ['Nutella Bubble Waffle', 'Bubble Waffle', 400000],
            ['Oreo Bubble Waffle', 'Bubble Waffle', 400000],
            ['Pistachio Bubble Waffle', 'Bubble Waffle', 500000],
            ['White Bubble Waffle', 'Bubble Waffle', 400000],

            // Circle Waffle
            ['Italian Circle Waffle', 'Circle Waffle', 400000],
            ['Add Ball Ice Cream', 'Circle Waffle', 100000],
            ['Add Fruits', 'Circle Waffle', 200000],
            ['Belgium Circle Waffle', 'Circle Waffle', 550000],
            ['Dark Circle Waffle', 'Circle Waffle', 400000],
            ['Galaxy Circle Waffle', 'Circle Waffle', 400000],
            ['Lotus Circle Waffle', 'Circle Waffle', 450000],
            ['Mix Flavors Circle Waffle', 'Circle Waffle', 500000],
            ['Nutella Circle Waffle', 'Circle Waffle', 400000],
            ['Oreo Circle Waffle', 'Circle Waffle', 400000],
            ['Pistachio Circle Waffle', 'Circle Waffle', 500000],
            ['White Circle Waffle', 'Circle Waffle', 400000],

            // Crepe
            ['Kinder Crepe', 'Crepe', 400000],
            ['Belgium Crepe', 'Crepe', 500000],
            ['Brownie Crepe', 'Crepe', 350000],
            ['Crepe With Strawberry', 'Crepe', 500000],
            ['Dark Crepe', 'Crepe', 300000],
            ['Dubai Roll Crepe With Fruits', 'Crepe', 550000],
            ['Dubai Roll Crepe With Ice Cream', 'Crepe', 450000],
            ['Dubai Triangle Crepe', 'Crepe', 600000],
            ['Dubai Square Crepe', 'Crepe', 600000],
            ['Galaxy Crepe', 'Crepe', 350000],
            ['Italian Crepe', 'Crepe', 300000],
            ['Lotus Crepe', 'Crepe', 350000],
            ['Mix Flavors Crepe', 'Crepe', 400000],
            ['Nutella Crepe', 'Crepe', 300000],
            ['Oreo Crepe', 'Crepe', 300000],
            ['Osmalya Crepe with Belgium', 'Crepe', 950000],
            ['Pistachio Crepe', 'Crepe', 400000],
            ['Pistachio Lotus Crepe with Strawberry', 'Crepe', 450000],
            ['Red Velvet Crepe', 'Crepe', 400000],
            ['Triangle Crepe With Fruits', 'Crepe', 600000],
            ['Triangle Italian Crepe', 'Crepe', 350000],
            ['White Crepe', 'Crepe', 300000],
            ['Add Fruits', 'Crepe', 200000],
            // Cups
            ['Belgium Cup', 'Cups', 600000],
            ['Brownie Cup', 'Cups', 250000],
            ['Crispy Rice Belgium Cup', 'Cups', 450000],
            ['Dubai Cup', 'Cups', 350000],
            ['Red Velvet Cup', 'Cups', 300000],
            ['Strawberry Cup', 'Cups', 350000],

            // Desserts
            ['Blueberry Tart', 'Desserts', 300000],
            ['Mango Tart', 'Desserts', 250000],
            ['Oriental Tart', 'Desserts', 300000],
            ['Eclair Caramel', 'Desserts', 250000],
            ['Eclair Chocolate', 'Desserts', 250000],
            ['Eclair Lotus', 'Desserts', 250000],
            ['Eclair Strawberry', 'Desserts', 250000],
            ['Lotus Can Cake', 'Desserts', 300000],
            ['Millefeuille', 'Desserts', 250000],
            ['Millefeuille Raspberry Cup', 'Desserts', 250000],
            ['Muffins', 'Desserts', 250000],
            ['Blueberry Can Cake', 'Desserts', 300000],
            ['Paris Breast', 'Desserts', 250000],
            ['Pistachio Can Cake', 'Desserts', 300000],
            ['Profiterole Creamy', 'Desserts', 250000],
            ['Red Velvet Piece', 'Desserts', 250000],
            ['Strawberry Can Cake', 'Desserts', 300000],
            ['Strawberry Tart', 'Desserts', 300000],
            ['Tropezian', 'Desserts', 300000],

            // Donuts Waffle
            ['Add Fruits', 'Donuts Waffle', 150000],
            ['Add Ice Cream Ball', 'Donuts Waffle', 100000],
            ['Belgium Chocolate Donuts Waffle', 'Donuts Waffle', 500000],
            ['Dark Donuts Waffle', 'Donuts Waffle', 350000],
            ['Galaxy Donuts Waffle', 'Donuts Waffle', 350000],
            ['Italian Donuts Waffle', 'Donuts Waffle', 350000],
            ['Lotus Donuts Waffle', 'Donuts Waffle', 350000],
            ['Mix Flavors Donuts Waffle', 'Donuts Waffle', 400000],
            ['Nutella Donuts Waffle', 'Donuts Waffle', 350000],
            ['Oreo Donuts', 'Donuts Waffle', 350000],
            ['Pistachio Donuts Waffle', 'Donuts Waffle', 400000],
            ['White Donuts Waffle', 'Donuts Waffle', 350000],

            // Fettuccine
            ['Add Fruits', 'Fettuccine', 150000],
            ['Add Ice Cream Ball', 'Fettuccine', 100000],
            ['Belgium Fettuccine', 'Fettuccine', 550000],
            ['Dark Fettuccine', 'Fettuccine', 350000],
            ['Galaxy Fettuccine', 'Fettuccine', 350000],
            ['Italian Fettuccine', 'Fettuccine', 350000],
            ['Kinder Fettuccine', 'Fettuccine', 350000],
            ['Lotus Fettuccine', 'Fettuccine', 400000],
            ['Nutella Fettuccine', 'Fettuccine', 350000],
            ['Oreo Fettuccine', 'Fettuccine', 350000],
            ['Triple Chocolate Fettuccine With Ice Cream Ball', 'Fettuccine', 450000],
            ['Pistachio Fettuccine', 'Fettuccine', 450000],
            ['White Fettuccine', 'Fettuccine', 350000],

            // Gym Items
            ['Add Diet Ice Cream Vanilla', 'Gym Items', 100000],
            ['Add Fruits', 'Gym Items', 200000],
            ['Add Honey Spoon', 'Gym Items', 100000],
            ['Protein Small Pancake', 'Gym Items', 450000],

            // Merry Cream Cone
            ['Coated Cone', 'Merry Cream Cone', 250000],
            ['Dipped Large Cone', 'Merry Cream Cone', 250000],
            ['Large Cone', 'Merry Cream Cone', 200000],
            ['Medium Cone', 'Merry Cream Cone', 150000],
            ['Small Cone', 'Merry Cream Cone', 100000],
            ['Sugar Cone', 'Merry Cream Cone', 200000],

            // Merry Cream Cup
            ['Large Cup', 'Merry Cream Cup', 250000],
            ['Large Cup Open Toppings', 'Merry Cream Cup', 350000],
            ['Small Cup', 'Merry Cream Cup', 200000],
            ['Small Cup Open Toppings', 'Merry Cream Cup', 300000],
            ['Add Pistachio or Chocolate', 'Merry Cream Cup', 100000],

            // Mighty Crepe
            ['Mighty Mix Brownie', 'Mighty Crepe', 550000],
            ['Mighty Mix Brownie Belgium', 'Mighty Crepe', 750000],
            ['Mighty Mix Red Velvet', 'Mighty Crepe', 550000],
            ['Mighty Mix Red Velvet Belgium', 'Mighty Crepe', 750000],

            // Mini Pancake Balls
            ['10 Balls With Fruits', 'Mini Pancake Balls', 550000],
            ['16 Mini Pancake Balls Mix Flavors', 'Mini Pancake Balls', 550000],
            ['16 Mini Pancake Balls White or Choco', 'Mini Pancake Balls', 500000],
            ['Belgium Mini Pancake Balls', 'Mini Pancake Balls', 550000],
            ['Dark Mini 10 Pancake Balls', 'Mini Pancake Balls', 350000],
            ['Galaxy Mini Pancake Balls', 'Mini Pancake Balls', 400000],
            ['Italian Mini Pancake Balls', 'Mini Pancake Balls', 350000],
            ['Kinder Mini Pancake Balls', 'Mini Pancake Balls', 400000],
            ['Lotus Mini Pancake Balls', 'Mini Pancake Balls', 400000],
            ['Nutella Mini Pancake Balls', 'Mini Pancake Balls', 350000],
            ['Oreo Mini Pancake Balls', 'Mini Pancake Balls', 350000],
            ['Pistachio Mini Pancake Balls', 'Mini Pancake Balls', 450000],
            ['White Mini 10 Pancake Balls', 'Mini Pancake Balls', 350000],

            // Mou
            ['Chocolate Mou', 'Mou', 350000],
            ['Mix Berries Mou', 'Mou', 350000],
            ['Pistachio Mou', 'Mou', 400000],
            ['Strawberry Mou', 'Mou', 350000],

            // Profiterole
            ['Pyramide 4 Mix', 'Profiterole', 450000],
            ['Pyramide 4 With Belgium', 'Profiterole', 550000],
            ['Pyramide 7 With Belgium', 'Profiterole', 800000],
            ['Pyramide 9 With Belgium', 'Profiterole', 1000000],

            // قشطوطة
            ['مع رز بحليب', 'قشطوطة', 100000],
            ['قشطوطة بلجيكي', 'قشطوطة', 550000],
            ['قشطوطة بلجيكي وبستاشيو مع برش', 'قشطوطة', 500000],
            ['قشطوطة بلجيكي وبستاشيو مع حب', 'قشطوطة', 650000],
            ['قشطوطة بلجيكي ولوتس', 'قشطوطة', 500000],
            ['قشطوطة بستاشيو اكسترا حب', 'قشطوطة', 600000],
            ['قشطوطة بستاشيو مع صوص بأنواعه', 'قشطوطة', 450000],
            ['قشطوطة سوبر (بلجيكي بستاشيو ولوتس)', 'قشطوطة', 600000],
            ['قشطوطة بستاشيو مع برش', 'قشطوطة', 500000],
            ['قشطوطة صوص بأنواعه', 'قشطوطة', 400000],
            ['قشطوطة فواكه', 'قشطوطة', 600000],
            ['قشطوطة كراميل', 'قشطوطة', 400000],
            ['قشطوطة منجا مع بلجيكي', 'قشطوطة', 600000],
            ['قشطوطة نص بلجيكي نص فواكه', 'قشطوطة', 600000],
            ['Box 9 Donuts With Fruit & Chocolate', 'Others', 600000],
            ['Box 9 Donuts With Fruit & Pistachio', 'Others', 700000],
            ['تزيين البان كيك', 'Others', 100000],
            ['Pyramide 4 Mix', 'Others', 450000],
            ['Pyramide 7 Mix', 'Others', 650000],
            ['Pyramide 7 Mix 2 Of Them Belgium', 'Others', 750000],
            ['Frozen Yogurt كل شي', 'Others', 0],
            ['Croissant', 'Others', 0],
            ['Royal Crunch Cup', 'Others', 350000],
            // Water
            ['Pampa', 'Water', 10000],
            ['Sohat', 'Water', 30000],
        ];

        $items = [];

        foreach ($rawItems as [$name, $category, $price]) {
            $items[] = [
                'category_id' => $categories[$category],
                'name' => $name,
                'description' => $name,
                'price' => $price,
                'image' => 'images/items/' . Str::slug($name) . '.jpg',
                'is_sale' => false,
                'sale_price' => null,
            ];
        }

        DB::table('items')->insert($items);
    }
}
