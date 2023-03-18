<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Hidayat Faturahman',
                'email' => 'hidayatfaturahman68@gmail.com',
                'password' => Hash::make('siskyuwuh2434'),
                'role' => 'admin',
            ],
            [
                'name' => 'Siska Leontyne',
                'email' => 'siskyuwuh2434@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'customer',
            ],
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
