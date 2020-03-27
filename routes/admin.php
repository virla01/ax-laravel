<?php

/*
 Si se instala de nuevo esta opcion 
 en App\Providers\RouteServiceProvider.php
cambiar esto

      public const HOME = '/home'; por
      public const HOME = '/';

cambiar protected function mapWebRoutes() por el de abajo

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->prefix('admin')
            ->namespace('App\Http\Controllers\Backend')
            ->group(base_path('routes/admin.php'));

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }



 
 hay que correr composer dump-autoload en el terminal
*/

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-----------------
ADMINISTRATOR
-------------------*/

Route::middleware('can:manage-users')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('/users', 'Modules\User\UsersController', ['except' => ['show','create','store']]);
    Route::resource('/menu', 'Modules\Menu\MenuController');
    Route::resource('/article', 'Modules\Article\ArticleController', ['except' => ['show','create','store', 'edit', 'update', 'destroy']]);
    Route::resource('/item', 'Modules\Article\Item\ItemController');
    Route::resource('/category', 'Modules\Article\Category\CategoryController');
    Route::resource('/tag', 'Modules\Article\Tag\TagController');
    Route::resource('/author', 'Modules\Article\Author\AuthorController');
    Route::resource('/source', 'Modules\Article\Source\SourceController');
});