<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Toon',
                'email' => 'baas@gmail.com',
                'password' => Hash::make('Baas123!'),
                'role_id' => 13
            ],
            [
                'name' => 'Sam',
                'email' => 'sam@bier.nl',
                'password' => Hash::make('Welkom01'),
                'role_id' => 13
            ],
            [
                'name' => 'Jennifer',
                'email' => 'a@a.com',
                'password' => Hash::make('1234567890'),
                'role_id' => 13
            ],
            [
                'name' => 'Joey',
                'email' => 'joey@company.com',
                'password' => Hash::make('Mariofan50!'),
                'role_id' => 13
            ],
            [
                'name' => 'Tester',
                'email' => 'test@test.com',
                'password' => '$2y$10$FLoVYnrVdte312YR/QoVOe.C9L6hcCbOROBzFaIB1dRewEQXuAiKy', // test
                'role_id' => 13,
            ]
        ];
        
        foreach ($users as $user) {
            $user = User::create($user);
        }
        
        $faker = Faker::create();
        foreach (range(1,60) as $index) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = '$2y$10$F4KYIOQCKPXFuk8NLaQYnegddTkJgkY/rMPb05EiSxk38N5ZguciO';
            if($index < 13){
                $user->role_id = $index;
            }
            elseif ($index < 20) {
                $user->role_id = 10;
            }
            else {
                $user->role_id = 12;
            }
            $user->save();
        }
    }
}
