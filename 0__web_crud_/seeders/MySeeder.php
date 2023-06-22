<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MySeeder extends Seeder
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
                'name' => 'Admin',
                'sur_name' => 'Test',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => '1',

            ],           
            // Add more users as needed
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
