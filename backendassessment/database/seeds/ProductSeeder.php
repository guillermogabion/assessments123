<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Product::create([
            'name' => 'Product1',
            'stock' => '5',
        ]);

        Product::create([
            'name' => 'Product2',
            'stock' => '3',
        ]);
        Product::create([
            'name' => 'Product3',
            'stock' => '4',
        ]);
    }
}
