<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'Leader']);
        Role::create(['name' => 'Staff']);
    }
}
