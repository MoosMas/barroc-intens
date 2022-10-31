<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $company = new Company();
            $company->name = $faker->company;
            $company->phone = $faker->phoneNumber;
            $company->street = $faker->streetName;
            $company->house_number = $faker->buildingNumber;
            $company->city = $faker->city;
            $company->country_code = $faker->countryCode;
            $company->bkr_checked_at = null;
            $company->contact_id = User::all()->where('role_id', 12)->random()->id;
            $company->save();
        }

    }
}
