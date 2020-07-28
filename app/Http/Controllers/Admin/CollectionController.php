<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Recipe;
use App\Models\Collection;

use Illuminate\Database\Eloquent\Builder;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $collections = Collection::paginate(10);
        //dd($collections);
        return view('admin.collections.all-collections', compact('collections'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.collections.add-collection');
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
        $collection = new Collection();
        $data = $request->all();
        //dd($data);
        $collection -> name = $data['name'];
        $collection -> description = $data['description'];
        $collection->save();
        //$result = $collection->fill($data)->save();
        
        //$recipeId = $recipe->id;
        
        //$sessionRecipeId = session('recipeId');
        session(['collectionId' => $collection->id,]);
        return redirect()->route('admin.add.collection.recipes')->with(['success' => 'Успішно збережено.']);
        //return view('admin.collections.add-collection-recipes');
        //dd($recipeId);
        /*if ($result) {
            return redirect()->route('admin.collections.add-collection-recipes')->with(['success' => 'Успішно збережено.']);
        } else {
            return back()->withErrors(['msg' => "Помилка збереження запису."])->withInput();
        }*/
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
