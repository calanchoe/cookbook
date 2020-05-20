<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Step;
use App\Models\Ingredient;
use App\Models\RecipeIngr;
use App\Models\RecipeCategory;



use Illuminate\Database\Eloquent\Builder;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;

class RecipeGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipes = Recipe::all();
        //dd($recipes);
        return view('welcome', compact('recipes'));
    }
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function recipeingrs(Request $request)
    {

        $request->all();

        $valueIngrIds = $request->get('ingredient_ids'); //array
        $ingrIds = array_keys($valueIngrIds);
        //dd($ingrIds);
        $ingrCount = count($ingrIds); //int
        
        $recipeIds = DB::table('recipe_ingr')->select('recipe_id')->whereIn('ingredient_id', $ingrIds)->groupBy('recipe_id')->havingRaw('count(*) >= '.$ingrCount)->pluck('recipe_id');

        $recipes = Recipe::whereIn('id', $recipeIds)->with(['ingredients', 'recipe_category'])->paginate(10);
        //$recipesFulls = Recipe::where('id', '=', $id)->with(['steps', 'ingredients'])->first();

        //dd($recipes);


        return view('recipes.recipes_ingredient', compact('request', 'recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$recipe = Recipe::findOrFail($id);
        $recipe = Recipe::where('id', '=', $id)->with(['steps', 'ingredients'])->first();
        //dd($recipe);
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
