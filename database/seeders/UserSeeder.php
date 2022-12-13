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
        // User::truncate();

        $csvFile = fopen(public_path("users/usuarios.csv"), "r");
        $firstline = true;
        // while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
        //     if (!$firstline) {
        //         User::create([
        //             "firstname" => $data['1'],
        //             "lastname" => $data['2'],
        //             "username" => $data['3'],
        //             "password" => Hash::make($data['4']),
        //         ])->assignRole('User');
        //     }
        //     $firstline = false;
        // }

        fclose($csvFile);

    }
}
