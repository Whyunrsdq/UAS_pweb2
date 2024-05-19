<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'whyunrsdq',
                'name' => 'AkunAdmin',
                'email' => 'wahyunursidiq4321@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('Wahyuu123')
            ],
            [
                'username' => 'admin',
                'name' => 'AkunAdmin',
                'email' => 'admin123@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('09876543')
            ],

            [
                'username' => 'Firman',
                'name' => 'AkunUser',
                'email' => 'firman1234@gmail.com',
                'level' => 'user',
                'password' => Hash::make('Mann123')
            ],


        ];

         foreach ($user as $key => $value) {
             User::create($value);
         }
    }
}
