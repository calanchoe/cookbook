<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\Cuisine;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$recipes = Recipe::all();
        return view('admin.recipes.recipes-all', compact('recipes'));*/

        $recipes = Recipe::with(['recipe_category', 'cuisine'])->paginate(10);
        //dd($recipes);
        return view('admin.recipes.all-recipes', compact('recipes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $igrcategories = RecipeCategory::all();
        $cuisines = Cuisine::all();
        
        //dd($igrcategories);
        return view('admin.recipes.add-recipes', compact('igrcategories', 'cuisines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe();
        $data = $request->all();
        //dd($data);
        $result = $recipe->fill($data)->save();
        
        //$recipeId = $recipe->id;
        
        //$sessionRecipeId = session('recipeId');
        session(['recipeId' => $recipe->id,]);
        
        //dd($recipeId);
        if ($result) {
            return redirect()->route('admin.recipe.ingr')->with(['success' => 'Успішно збережено.']);
        } else {
            return back()->withErrors(['msg' => "Помилка збереження запису."])->withInput();
        }
        
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
