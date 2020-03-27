<?php
use Illuminate\Database\Seeder;
use App\Http\Controllers\Backend\Modules\Menu\Model\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Menu::class)->create([
            'name' => 'Dasboard',
            'slug' => 'dashboard',
            'url' => 'admin',
            'icon' => 'tachometer',
            'parent' => 0,
            'order' => 0,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'Aplications',
            'slug' => 'aplications',
            'url' => '',
            'icon' => 'puzzle-piece',
            'parent' => 0,
            'order' => 1,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'Articles',
            'slug' => 'articles',
            'url' => 'admin/article',
            'icon' => 'newspaper',
            'parent' => 2,
            'order' => 0,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'Menues',
            'slug' => 'menues',
            'url' => 'admin/menu',
            'icon' => 'bars',
            'parent' => 2,
            'order' => 1,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'User Management',
            'slug' => 'user_management',
            'url' => 'admin/users',
            'icon' => 'users',
            'parent' => 2,
            'order' => 2,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'View Site',
            'slug' => 'view-site',
            'url' => '/',
            'icon' => 'sign-out',
            'parent' => 0,
            'order' => 2,
            'client' => 'admin',
            'access' => ''
        ]);
        factory(Menu::class)->create([
            'name' => 'Home',
            'slug' => 'home',
            'url' => '/',
            'icon' => 'home',
            'parent' => 0,
            'order' => 1,
            'client' => 'site',
            'access' => ''
        ]);
    }
}
