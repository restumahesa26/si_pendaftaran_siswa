<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nama' => 'Mufti Restu Mahesa',
            'role' => 'ADMIN',
            'email' => 'mufti.restumahesa@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama' => 'Ridha Nafile',
            'role' => 'ADMIN',
            'email' => 'ridhanafila@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
