<?php

use Illuminate\Support\Facades\Route;
//use App;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/index')->name('adminindex');
Route::view('/admin/index', 'admin/index');

/*Route::group(['namespace' => 'Admin'], function () {

    Route::get('/admin/categories-ingredients/ingr_categories_add', 'IngredientCategory@index');
});*/
$groupeData = ['namespace' => 'Admin', 'prefix' => 'admin',];
Route::group($groupeData, function(){
    //Igredient categories
    $methods = ['index', 'edit', 'update', 'creat', 'store',];
    Route::resource('ingredientCategory', 'IngredientCategory')->only($methods)->names('admin.categories-ingredients');
    Route::view('admin/categories-ingredients/index', 'admin.categories-ingredients.index');
    Route::view('admin/categories-ingredients/create', 'admin.categories-ingredients.create');

});


//Route::get('/admin/index', 'Admin\IngredientCategory@index');
//Route::get('/admin/index', 'App\Http\Admin\IngredientCategory@show');
