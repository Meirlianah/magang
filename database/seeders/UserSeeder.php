<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now(),
        ])->assignRole('admin');

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now(),
        ])->assignRole('user');
    }
}
