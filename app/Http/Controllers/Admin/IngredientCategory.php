<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngrCategory;

class IngredientCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list of all categories for ingredients
        //dd('1');
        $ingrcategs = IngrCategory::paginate(10);
        return view('admin.categories-ingredients.index', compact('ingrcategs'));
        /*$ingrcategs = IngrCategory::all();
        return view('admin.categories-ingredients.ingr_categories_add', compact('ingrcategs'));*/
    }

    /*public function show()
    {
        //$ingrcategs = App\Models\IngrCategory::all();
        //return view('admin.index', compact('ingrcategs'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //page of creat new ingredient's category
        return view('admin.categories-ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //page of save new ingr category
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
        //page of edit ingr's category
        $ingrcateg = IngrCategory::findOrFail($id);
        $ingrcategorylist = IngrCategory::all();
        //dd($ingrcateg);
        return view('admin.categories-ingredients.edit', compact('ingrcateg', 'ingrcategorylist'));
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
        dd(__METHOD__, $request->all(), $id);
        return view('admin.categories-ingredients.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        return view('admin.categories-ingredients.destroy');
    }
}
