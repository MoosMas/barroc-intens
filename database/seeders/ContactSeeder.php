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
            $contact->id = $faker->id;
            $contact->name = $faker->name;
            $contact->company_name = $faker->company_name;
            $contact->email = $faker->email;
            $contact->phone = $faker->phone;
            $contact->message = $faker->message;
            $contact->handled_at = $faker->handled_at;
            $contact->notes = $faker->notes;
            $contact->save();
        }

    }
}
