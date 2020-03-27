<?php

use Illuminate\Database\Seeder;

use App\Http\Controllers\Backend\Modules\Article\Model\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'name' => 'Select category',
            'slug' => 'Select category',
            'description' => 'No description',
            'images' => ''
        ]);
    }
}
