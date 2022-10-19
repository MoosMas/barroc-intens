<?php

namespace Database\Seeders;

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
        $maintenance = new Maintenance();
        $maintenance->company_id = '1';
        $maintenance->title = 'Kapotte machine';
        $maintenance->remark = 'Er komt cola uit ipv koffie';
        $maintenance->save();

        $maintenance = new Maintenance();
        $maintenance->company_id = '2';
        $maintenance->title = 'Te weinig bonen';
        $maintenance->remark = 'We krijgen te weinig bonen';
        $maintenance->save();

        $maintenance = new Maintenance();
        $maintenance->company_id = '3';
        $maintenance->title = 'lekkende machine';
        $maintenance->remark = 'Er lekt water uit de machine';
        $maintenance->save();

        $maintenance = new Maintenance();
        $maintenance->company_id = '4';
        $maintenance->title = 'Machine vloog in de fik';
        $maintenance->remark = 'ons bedrijf is helemaal afgebrand';
        $maintenance->save();
    }
}
