<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintenance;
use Illuminate\Support\Arr;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $maintenance_employees = User::all()->where('role_id', 10);
        $companies = Company::all();

        foreach (range(1, 25) as $index) {
            $maintenance_request = new Maintenance();
            $maintenance_request->company_id = $companies->random()->id;;
            $maintenance_request->title = Arr::random(['Onderhoud', 'Storing', 'Onderdeel vervangen']);
            $maintenance_request->remark = 'Aanvraag om een medewerker langs te laten komen.';
            $maintenance_request->start = Carbon::parse($faker->dateTimeBetween('-1 week', '+10 weeks')->format('Y-m-d 0:00:00'))->addHours(rand(9, 17));
            $maintenance_request->duration_minutes = Arr::random([30, 45, 60, 90]);
            
            if ($index < 5) {
                $maintenance_request->employee_id = null;
            }
            else {
                $maintenance_request->employee_id = $maintenance_employees->random()->id;
            }
            $maintenance_request->save();
        }
    }
}
