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
Route::put('/recipes/show/{id}', 'FavoriteController@destroy')->name('recipe.favorite.delete');

Route::post('/recipes/add-like', 'LikeController@store')->name('recipes.like.store.add.like');
Route::delete('/recipes/delete-like/{id}', 'LikeController@destroy')->name('recipe.like.delete');

Route::get('/categories-recipes/all-categories', 'CategoriesController@index')->name('all.categories.recipes');
Route::get('/categories-recipes/show-category', 'CategoriesController@showcategoryresipes')->name('category.recipes');

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
    Route::get('index', 'StepController@reternToAdminRecipes')->name('admin.recipes.return');


    //create cuisine
    //create recipe categy
    //create collection
    Route::get('collections/all-collections', 'CollectionController@index')->name('admin.all-collections');
    Route::get('collections/add-collection', 'CollectionController@create')->name('admin.add.collection');
    Route::post('collections/add-collection', 'CollectionController@store')->name('admin.add.collection.store');
    Route::get('collections/add-collection-recipes', 'RecipeCollectController@create')->name('admin.add.collection.recipes');
    Route::post('collections/add-collection-recipes', 'RecipeCollectController@store')->name('admin.add.collection.recipes.store');
    //user control
    Route::get('users/all-users', 'UserController@index')->name('admin.users');
    Route::get('users/user-edit/{user}', 'UserController@edit')->name('admin.user.edit');
    Route::patch('users/user-edit', 'UserController@update')->name('admin.add.user.update');
    Route::put('/recipes/user-edit/{id}', 'UserController@destroy')->name('admin.add.user.delete');
    

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
