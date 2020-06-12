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
Route::get('/collection/all-collection', 'CollectionController@index')->name('collection.all-collection');
Route::get('/collection/show-collection/{collection} ', 'CollectionController@show')->name('collection.show-collection');
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
    //Route::view('recipes/add-recipes', 'admin.recipes.add-recipes');
    //create resipe
    Route::get('recipes/all-recipes', 'RecipeController@index')->name('admin.recipes');
    Route::get('recipes/add-recipes', 'RecipeController@create')->name('admin.add.resipe');
    Route::post('recipes/add-recipes', 'RecipeController@store')->name('admin.add.reсipe.store');
    Route::get('recipes/recipes-ingredient', 'RecipeIngrController@create')->name('admin.recipe.ingr');
    Route::post('recipes/recipes-ingredient', 'RecipeIngrController@store')->name('admin.add.reсipe.ingr.store');
    Route::get('recipes/recipe-steps', 'StepController@create')->name('admin.add.resipe.step');
    Route::post('recipes/recipe-steps', 'StepController@store')->name('admin.add.reсipe.step.store');

    //create cuisine
    //create recipe categy
    //create collection
    //user control
    

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
