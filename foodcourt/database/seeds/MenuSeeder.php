<?php

use App\Model\Category;
use App\Model\Menu;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();

        $category_count = Category::count();

        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            Menu::create([
                'name' => $faker->word,
                'category_id' => ($i % $category_count) + 1,
                'stock' => rand(11, 140),
                'status' => rand(0, 1),
                'price' => rand(90, 1000) . '00',
                'image' => $faker->word,

            ]);
        }
    }
}
