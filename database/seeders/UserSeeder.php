<?php

namespace Database\Seeders;

use App\Models\Anak;
use App\Models\OrangTua;
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
            'nama' => 'Ridha Nafila',
            'role' => 'ADMIN',
            'email' => 'ridhanafila@gmail.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'nama' => 'Renti Epana Sari',
            'role' => 'USER',
            'email' => 'rentiepana@gmail.com',
            'password' => Hash::make('password')
        ]);

        $orangTua = OrangTua::create([
            'user_id' => $user->id,
            'tempat_lahir' => 'Bengkulu',
            'tanggal_lahir' => '2001-05-17',
            'pekerjaan' => 'Pegawai Negeri Sipil',
            'alamat' => 'Kota Bengkulu',
        ]);

        Anak::create([
            'orang_tua_id' => $orangTua->id,
            'nama' => 'Muhammad Robert',
            'tempat_lahir' => 'Bengkulu',
            'tanggal_lahir' => '2010-06-20',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'golongan_darah' => 'A',
            'alamat' => 'Kota Bengkulu',
        ]);
    }
}
