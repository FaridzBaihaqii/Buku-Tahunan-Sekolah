<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'admin',
                'password' => Hash::make('123')
            ],
            [
                'username' => 'pengguna',
                'password' => Hash::make('123')
            ]
        ];

        // looping data dengan foreach
        foreach ($userData as $val) {
            Akun::create($val);
        }
    }
}