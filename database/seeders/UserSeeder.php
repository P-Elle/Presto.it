<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gendo Ikari',
            'is_revisor' => 1,
            'email' => 'nerv@info.com',
            'password' => Hash::make('Test1234!')
        ]);

        User::create([
            'name' => 'Shinji Ikari',
            'is_revisor' => 0,
            'email' => 'eva@info.com',
            'password' => Hash::make('Test1234!')
        ]);
           
    }
}
