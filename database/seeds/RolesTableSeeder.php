<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Backend\Model\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'contributor']);
        Role::create(['name' => 'subscriber']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'guest']);
    }
}
