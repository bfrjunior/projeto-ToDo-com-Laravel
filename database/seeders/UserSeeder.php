<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Fernando',
            'email' => 'fernando@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
