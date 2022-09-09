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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Abraham Eduardo',
            'lastname' => 'Diaz Torres',
            'username' => '7141757',
            'password' => Hash::make(7141757)
        ])->assignRole('Admin');

        User::create([
            'firstname' => 'Jorge Alberto',
            'lastname' => 'Mondragon Escamilla',
            'username' => '7141684',
            'password' => Hash::make(7141684)
        ])->assignRole('User');

        User::create([
            'firstname' => 'Laura Jessica',
            'lastname' => 'Soto Sanchez',
            'username' => '7141327',
            'password' => Hash::make(7141327)
        ])->assignRole('User');
    }
}
