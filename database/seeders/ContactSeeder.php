<?php

namespace Database\Seeders;

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
        $contact = new Contact();
        $contact->name = 'Toon';
        $contact->company_name = 'Socialtoon';
        $contact->email = 'info@socialtoon.nl';
        $contact->phone = '0682749436';
        $contact->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a accumsan neque.';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Sam';
        $contact->company_name = 'Socialsam';
        $contact->email = 'info@socialsam.nl';
        $contact->phone = '0682742938';
        $contact->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a accumsan neque.';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Joey';
        $contact->company_name = 'Socialjoey';
        $contact->email = 'info@socialjoey.nl';
        $contact->phone = '0682739482';
        $contact->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a accumsan neque.';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Jennifer';
        $contact->company_name = 'Socialjennifer';
        $contact->email = 'info@socialjennifer.nl';
        $contact->phone = '0682749282';
        $contact->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a accumsan neque.';
        $contact->save();
        
    }
}
