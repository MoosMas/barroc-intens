<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $contact = new Contact();
            $contact->name = $faker->name;
            $contact->company_name = $faker->company;
            $contact->email = $faker->email;
            $contact->phone = $faker->phoneNumber;
            $contact->message = $faker->sentence;
            
            if ($index < 6) {
                $contact->handled_at = $faker->dateTimeBetween('-2 weeks', '-3 days');
            }
            
            $contact->save();
        }

    }
}
