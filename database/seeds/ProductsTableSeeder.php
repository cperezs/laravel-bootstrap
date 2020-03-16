<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<100; $i++) {
            $p = new Product();
            $p->name = $faker->sentence(5);
            $p->price = $faker->randomFloat(2, 2, 200);
            $p->description = $faker->paragraph;
            $p->save();
        }
    }
}
