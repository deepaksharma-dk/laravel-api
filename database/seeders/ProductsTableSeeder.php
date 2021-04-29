<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Let's truncate our existing records to start from scratch.
        Product::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few products in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'title' => $faker->word,
                'sku' => $faker->randomDigit,
            ]);
        }
    }
}
