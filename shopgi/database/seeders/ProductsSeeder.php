<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\categories;
use App\Models\products;

use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
        products:: create([
            'name' => $faker->word,
            'img' => 'hinh' . $i . '.jpg', // Tạo chuoi hình anh co dang hinh1.jpg, hinh2.jpg, ...
            'description' => $faker->sentence,
            'price' => $faker->randomFloat(2, 10, 1000),
            'quantity' => $faker->numberBetween(1, 100),
            'sold' => $faker->numberBetween(1, 100),
            'view' => $faker->numberBetween(1, 100),
            'category_id' => $faker->numberBetween(1, 10), // Chọn ngau nhiên một danh mục từ 1 đến 10
        ]);
        }       
    }
}
