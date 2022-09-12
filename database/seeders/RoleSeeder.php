<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.home'])->syncRoles($role1);
        Permission::create(['name' => 'admin.user.home'])->syncRoles([$role1, $role2]);

        User::create([
            'firstname' => 'Abraham Eduardo',
            'lastname' => 'Diaz Torres',
            'username' => '7141757',
            'password' => Hash::make(7141757)
        ])->assignRole('Admin');
    }
}
