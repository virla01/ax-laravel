<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Backend\Modules\Article\Model\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Author::class)->create([
            'name' => 'Select author',
            'slug' => 'Select author',
            'description' => 'No description',
            'images' => '',
            'email' => '',
            'social' => ''
        ]);
    }
}
