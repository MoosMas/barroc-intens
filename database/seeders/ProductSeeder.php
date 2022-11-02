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
                'description' => 'Onze nieuwe koffiebonen smaken dubbel zo goed! Ontdek het dubbel gecertificeerde Douwe Egberts Biologisch & Fairtrade assortiment. Dubbel gecertificeerd, dat smaakt zo dubbel zo goed! Douwe Egberts Dark Roast Espresso Biologisch & Fairtrade is een melange samengesteld uit 100% Fairtrade gecertificeerde Arabica en Robusta bonen. De bonen zijn donker gebrand en krachtige smaak. Het smaakprofiel wordt gekenmerkt door tonen van toffee en chocolade en hinten van dadels en rijpe pruim. De melange is uitstekend geschikt voor een smaakvolle espresso en lungo, maar vormt ook een solide basis voor een robuuste cappuccino of koffie verkeerd.',
                'price' => 10,
                'product_category_id' => 2
            ],
            [
                'name' => 'Koffiebonen (groot)',
                'description' => 'Onze nieuwe koffiebonen smaken dubbel zo goed! Ontdek het dubbel gecertificeerde Douwe Egberts Biologisch & Fairtrade assortiment. Dubbel gecertificeerd, dat smaakt zo dubbel zo goed! Douwe Egberts Dark Roast Espresso Biologisch & Fairtrade is een melange samengesteld uit 100% Fairtrade gecertificeerde Arabica en Robusta bonen. De bonen zijn donker gebrand en krachtige smaak. Het smaakprofiel wordt gekenmerkt door tonen van toffee en chocolade en hinten van dadels en rijpe pruim. De melange is uitstekend geschikt voor een smaakvolle espresso en lungo, maar vormt ook een solide basis voor een robuuste cappuccino of koffie verkeerd.',
                'price' => 15,
                'product_category_id' => 2
            ],
            [
                'name' => 'Espresso koffiezet apparaat',
                'description' => 'Ben je op zoek naar een perfecte koffie-ervaring? Dat kan heel makkelijk. Met de Barroc intenst koffie machine. Een uniek systeem, dat als enige een hoge capaciteit combineert met een hoge kwaliteit koffie (tot wel 700 kopjes per uur!). Met het gesloten zetsysteem geniet iedereen op elk moment van een perfecte koffie.',
                'price' => 300,
                'product_category_id' => 1
            ],
            [
                'name' => 'Nespresso koffiezet apparaat',
                'description' => 'Ben je op zoek naar een perfecte koffie-ervaring? Dat kan heel makkelijk. Met de Barroc intenst koffie machine. Een uniek systeem, dat als enige een hoge capaciteit combineert met een hoge kwaliteit koffie (tot wel 700 kopjes per uur!). Met het gesloten zetsysteem geniet iedereen op elk moment van een perfecte koffie.',
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
