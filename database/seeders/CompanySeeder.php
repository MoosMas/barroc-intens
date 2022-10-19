<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name = 'Toon';
        $company->phone = '82749436';
        $company->street = 'Achterdijk';
        $company->house_number = '16';
        $company->city = 'Zevenbergen';
        $company->country_code = '316';
        $company->contact_id = '1';
        $company->save();

        $company = new Company();
        $company->name = 'Sam';
        $company->phone = '82743386';
        $company->street = 'Koekjesstraat';
        $company->house_number = '21';
        $company->city = 'Breda';
        $company->country_code = '316';
        $company->contact_id = '1';
        $company->save();

        $company = new Company();
        $company->name = 'Joey';
        $company->phone = '82939436';
        $company->street = 'zeestraat';
        $company->house_number = '11';
        $company->city = 'Breda';
        $company->country_code = '316';
        $company->contact_id = '1';
        $company->save();

        $company = new Company();
        $company->name = 'Jennifer';
        $company->phone = '82729847';
        $company->street = 'De meeren';
        $company->house_number = '19';
        $company->city = 'Stockholm';
        $company->country_code = '316';
        $company->contact_id = '1';
        $company->save();

    }
}
