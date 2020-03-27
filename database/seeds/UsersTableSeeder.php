<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Controllers\Backend\Model\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        
        $SuperAdminRole = Role::where('name', 'SuperAdmin')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $authorRole = Role::where('name', 'author')->first();
        $contributorRole = Role::where('name', 'contributor')->first();
        $subscriberRole = Role::where('name', 'subscriber')->first();
        $userRole = Role::where('name', 'user')->first();
        $guestRole = Role::where('name', 'guest')->first();

        $superadmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'aspectox.creativa@gmail.com',
            'password' => Hash::make('xhomero1456'),
        ]);

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@editor.com',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        $superadmin->roles()->attach($SuperAdminRole);
        $editor->roles()->attach($editorRole);
        $user->roles()->attach($userRole);
    }
}
