<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CustomInvoice;
use App\Models\CustomInvoiceProduct;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $companies = Company::all();
        $allProducts = Product::all();
        
        foreach (range(1, 10) as $index) {
            $invoice = new CustomInvoice();
            $invoice->date = $faker->dateTimeBetween('-11 months', '-1 month');

            if ($index < 10) {
                $invoice->paid_at = $faker->dateTimeBetween('-11 months', '-1 month');;
            }
            else{
                $invoice->paid_at = null;
            }

            $invoice->company_id = $companies->random()->id;

            $invoice->save();

            $productsToAdd = rand(1, 5);
            foreach (range(1, $productsToAdd) as $productsIndex){
                $dbProduct = $allProducts->random();
                $invoiceProduct = new CustomInvoiceProduct();
                $invoiceProduct->custom_invoice_id = $invoice->id;
                $invoiceProduct->product_id = $dbProduct->id;
                $invoiceProduct->amount = rand(1, 3);
                $invoiceProduct->price_per_product = $dbProduct->price;
                $invoiceProduct->save();
            }
        }
    }
}
