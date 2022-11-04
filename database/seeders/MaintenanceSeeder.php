<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintenance;

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

        foreach (range(1, 10) as $index) {
            $maintenance_request = new Maintenance();
            $maintenance_request->id = $faker->id;
            $maintenance_request->company_id = $faker->company_id;
            $maintenance_request->title = $faker->title;
            $maintenance_request->remark = $faker->remark;
            $maintenance_request->start = $faker->start;
            $maintenance_request->duration_minutes = $faker->duration_minutes;
            $maintenance_request->employee_id = $faker->employee_id;
            $maintenance_request->save();
        }
    }
}
