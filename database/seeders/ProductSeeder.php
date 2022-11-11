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
                'name' => 'Barroc Intens Italian Light',
                'description' => 'S234FREKT',
                'price' => 499,
                'installation_costs' => 289,
                'amount_in_stock' => 35,
                'product_category_id' => 1
            ],
            [
                'name' => 'Barroc Intens Italian',
                'description' => 'S234KNDPF',
                'price' => 599,
                'installation_costs' => 289,
                'amount_in_stock' => 60,
                'product_category_id' => 1
            ],
            [
                'name' => 'Barroc Intens Italian Deluxe',
                'description' => 'S234NNBMV',
                'price' => 799,
                'installation_costs' => 375,
                'amount_in_stock' => 20,
                'product_category_id' => 1
            ],
            [
                'name' => 'Barroc Intens Italian Deluxe Special',
                'description' => 'S234MMPLA',
                'price' => 999,
                'installation_costs' => 375,
                'amount_in_stock' => 39,
                'product_category_id' => 1
            ],
            [
                'name' => 'Espresso Beneficio (bonen)',
                'description' => 'Een toegankelijke en zachte koffie.  Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.',
                'price' => 21.60,
                'installation_costs' => 0,
                'amount_in_stock' => 412,
                'product_category_id' => 2
            ],
            [
                'name' => 'Espresso Beneficio (gemalen)',
                'description' => 'Een toegankelijke en zachte koffie.  Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.',
                'price' => 21.60,
                'installation_costs' => 0,
                'amount_in_stock' => 19,
                'product_category_id' => 2
            ],
            [
                'name' => 'Yellow Bourbon Brasil (bonen)',
                'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.',
                'price' => 23.20,
                'installation_costs' => 0,
                'amount_in_stock' => 57,
                'product_category_id' => 2
            ],
            [
                'name' => 'Yellow Bourbon Brasil (gemalen)',
                'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.',
                'price' => 23.20,
                'installation_costs' => 0,
                'amount_in_stock' => 100,
                'product_category_id' => 2
            ],
            [
                'name' => 'Espresso Roma (bonen)',
                'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.',
                'price' => 20.80,
                'installation_costs' => 0,
                'amount_in_stock' => 192,
                'product_category_id' => 2
            ],
            [
                'name' => 'Espresso Roma (gemalen)',
                'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.',
                'price' => 20.80,
                'installation_costs' => 0,
                'amount_in_stock' => 11,
                'product_category_id' => 2
            ],
            [
                'name' => 'Red Honey Honduras (bonen)',
                'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.',
                'price' => 27.80,
                'installation_costs' => 0,
                'amount_in_stock' => 79,
                'product_category_id' => 2
            ],
            [
                'name' => 'Red Honey Honduras (gemalen)',
                'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.',
                'price' => 27.80,
                'installation_costs' => 0,
                'amount_in_stock' => 47,
                'product_category_id' => 2
            ],
        ];
        
        foreach ($products as $product) {
            $product = Product::create($product);
        }
    }
}
