<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Seed the roles table.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'labtechnician']);
        Role::create(['name' => 'pharmacist']);
        Role::create(['name' => 'cashier']);
        Role::create(['name' => 'receptionist']);
        Role::create(['name' => 'patient']);
    }
}
