<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contract;
use App\Models\ContractProduct;
use App\Models\Product;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $productCount = Product::all()->count();

        foreach (range(1, 150) as $index) {
            $startDate = $faker->dateTimeBetween('-11 months', '-1 month');
            $endDate = Carbon::parse($startDate)->addMonths(12);
            
            $contract = new Contract();
            $contract->company_id = Company::doesntHave('contracts')->get()->random()->id;
            $contract->start_date = $startDate;
            $contract->end_date = $endDate;
            $contract->save();
            
            $productsToAdd = rand(1, 5);
            foreach (range(1, $productsToAdd) as $productsIndex){
                $dbProduct = Product::all()->random();
                $contractProduct = new ContractProduct();
                $contractProduct->contract_id = $contract->id;
                $contractProduct->product_id = $dbProduct->id;
                $contractProduct->amount = rand(1, 3);
                $contractProduct->price_per_product = $dbProduct->price;
                $contractProduct->save();
            }
        }
    }
}
