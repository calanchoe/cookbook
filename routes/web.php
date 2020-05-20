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

/*Route::get('/',  function () {
    return view('welcome');
});*/

Route::get('/', 'RecipeGuestController@index')->name('start-recipes');
Route::resource('recipes', 'RecipeGuestController')->only('show')->names('recipes');

Route::get('/recipes/recipes_ingredient/ingr', 'RecipeGuestController@recipeingrs')->name('ingredient.find');

Route::post('/recipes/show/{favorite_id}', 'FavoriteController@store')->name('recipes.favorite.store.add.favorite');

Route::get('/user_save_recipe', 'FavoriteController@index')->name('user_save_recipe');
//Route::view('/recipes/recipes_ingredient', 'RecipeGuestController@recipeingrs')->name('recipes.found');
//add-favorite-recipe/{favorite_id}

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/admin/index', 'admin/index');


$groupeData = ['namespace' => 'Admin', 'prefix' => 'admin',];
Route::group($groupeData, function(){
    //Igredient categories
    $methods = ['index', 'edit', 'update', 'create', 'store',];
    Route::resource('ingredientCategory', 'IngredientCategory')->only($methods)->names('admin.categories-ingredients');
    Route::view('categories-ingredients/index', 'admin.categories-ingredients.index');

});

$groupeDataIngredients = ['prefix' => 'ingredient',];
Route::group($groupeDataIngredients, function () {
    $ingredientsMethods = ['index', 'show'];
    Route::resource('ingredient', 'IngredientController')->only($ingredientsMethods)->names('ingredient');
    Route::view('ingredient/index', 'ingredient.index');
    //Route::get('ingredient/index', 'IngredientController@index')->name('ingredient.find');
});




//Route::get('/admin/index', 'Admin\IngredientCategory@index');
//Route::get('/admin/index', 'App\Http\Admin\IngredientCategory@show');
