<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Http\Controllers\Backend\Modules\Menu\Model\Menu;
use App\Http\Controllers\Backend\Modules\Article\Model\Author;
use App\Http\Controllers\Backend\Modules\Article\Model\Source;
use App\Http\Controllers\Backend\Modules\Article\Model\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Menu::class, function (Faker $faker) {
    $name = $faker->name;
    $menus = Menu::all();
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'parent' => (count($menus) > 0) ? $faker->randomElement($menus->pluck('id')->toArray()) : 0,
        'order' => 0
    ];
});

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'images' => $faker->paragraph,
        'email' => $faker->paragraph,
        'social' => $faker->paragraph

    ];
});

$factory->define(Source::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'images' => $faker->paragraph
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'images' => $faker->paragraph
    ];
});