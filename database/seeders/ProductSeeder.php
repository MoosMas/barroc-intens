<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                'name' => 'Koffiebonen (klein)',
                'description' => 'Klein zakje koffiebonen',
                'price' => 10,
                'product_category_id' => 2
            ],
            [
                'name' => 'Koffiebonen (groot)',
                'description' => 'Groot zakje koffiebonen',
                'price' => 15,
                'product_category_id' => 2
            ],
            [
                'name' => 'Espresso',
                'description' => 'Espresso koffiezetapparaat',
                'price' => 300,
                'product_category_id' => 1
            ],
            [
                'name' => 'Nespresso',
                'description' => 'Nespresso koffiezetapparaat',
                'price' => 300,
                'product_category_id' => 1
            ],
            [
                'name' => 'Aansluitkosten',
                'description' => 'Aansluitkosten die nieuwe klanten eenmalig betalen.',
                'price' => 50,
                'product_category_id' => 4
            ],
        ];
        
        foreach ($products as $product) {
            $product = Product::create($product);
        }
    }
}
