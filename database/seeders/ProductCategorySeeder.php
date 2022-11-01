<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Koffiezetapparaten',
                'is_employee_only' => 0
            ],
            [
                'name' => 'Koffiebonen',
                'is_employee_only' => 0
            ],
            [
                'name' => 'Onderdelen',
                'is_employee_only' => 1
            ],
            [
                'name' => 'Aansluitkosten',
                'is_employee_only' => 1
            ]
        ];
        
        foreach($categories as $category) {
            $category = ProductCategory::create($category);
        }
    }
}
