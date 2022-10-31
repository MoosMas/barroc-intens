<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'department' => 'Board',
                'function' => 'CEO'
            ],
            [
                'department' => 'Finance',
                'function' => 'Head Finance'
            ],
            [
                'department' => 'Finance',
                'function' => 'Financiële Administratie'
            ],
            [
                'department' => 'Sales',
                'function' => 'Head Sales'
            ],
            [
                'department' => 'Sales',
                'function' => 'Consultant'
            ],
            [
                'department' => 'Inkoop',
                'function' => 'Head Inkoop'
            ],
            [
                'department' => 'Inkoop',
                'function' => 'Inkoper'
            ],
            [
                'department' => 'Inkoop',
                'function' => 'Medewerker Magazijn'
            ],
            [
                'department' => 'Maintenance',
                'function' => 'Head Maintenance'
            ],
            [
                'department' => 'Maintenance',
                'function' => 'Technische Dienst'
            ],
            [
                'department' => 'Maintenance',
                'function' => 'Planner'
            ],
            [
                'department' => 'Klanten',
                'function' => 'Klant'
            ],
            [
                'department' => 'Ontwikkeling',
                'function' => 'Ontwikkelaar',
            ]
            
        ];
        
        foreach ($roles as $key => $role) {
            $role = Role::create($role);
        }
    }
}
