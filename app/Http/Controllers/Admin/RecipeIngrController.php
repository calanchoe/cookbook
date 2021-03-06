<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\RecipeIngr;
use App\Models\IngrCategory;
use Illuminate\Support\Facades\DB;

class RecipeIngrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$recipeIdget = session()->pull('recipeId');
        $ingredients = Ingredient::all();
        $ingr_category_with = IngrCategory::with(['ingredients'])->get();
        //dd($recipeIdget);
       // $categoryIgrs = IngrCategory::where('id', $id)->with(['ingredients'])->first();
        //dd($categoryIgrs);

        return view('admin.recipes.recipes-ingredient', compact('ingredientswith', 'ingr_category_with', 'recipeIdget'));
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
        $data = $request->all();
        
        $counts = array_values(array_filter($data['count']));
        $measures = array_values(array_filter($data['measure']));
        $idIngrs = $data['ingredient_ids'];
        $recipeId = session('recipeId');
        //dd($recipeId);
        $results = [];
        
        $recipe = Recipe::find(session('recipeId'));
        DB::beginTransaction();
        for ($i=0; $i < count($idIngrs); $i++) { 
            $recipeIngr = new RecipeIngr();
            //dd($idIngrs);
            $recipe->ingredients()->attach($idIngrs[$i], ['count' => $counts[$i], 'measure' => $measures[$i]]);
            /*$recipeInrg->recipe_id = $recipeId;
            $recipeInrg->ingr_id = $idIngrs[$i];
            $recipeInrg->count = $counts[$i];
            $recipeInrg->measure = $measure[$i];*/
            //$results[] = $recipeInrg -> save();
        } 
       
            DB::commit();
            return view('admin.recipes.recipe-steps');
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
