<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Backend\Modules\Article\Model\Source;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Source::class)->create([
            'name' => 'Select source',
            'slug' => 'Select source',
            'description' => 'No description',
            'images' => ''
        ]);
    }
}
