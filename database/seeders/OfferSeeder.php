<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Offer;
use App\Models\OfferProduct;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $allProducts = Product::all();
        $allContacts = Contact::all();

        foreach (range(1, 10) as $index) {
            $offer = new Offer();
            $offer->contact_id = $allContacts->random()->id;
            $offer->save();

            $productsToAdd = rand(1, 5);
            foreach (range(1, $productsToAdd) as $productsIndex) {
                $dbProduct = $allProducts->random();
                $contractProduct = new OfferProduct();
                $contractProduct->offer_id = $offer->id;
                $contractProduct->product_id = $dbProduct->id;
                $contractProduct->amount = rand(1, 3);
                $contractProduct->price_per_product = $dbProduct->price;
                $contractProduct->save();
            }
        }
    }
}
