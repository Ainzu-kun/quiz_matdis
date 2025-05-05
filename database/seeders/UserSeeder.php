<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@upi.edu',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@upi.edu',
                'password' => bcrypt('user'),
                'role' => 'user',
            ],
        ];

        foreach($users as $key => $value) {
            User::create($value);
        }
    }
}
