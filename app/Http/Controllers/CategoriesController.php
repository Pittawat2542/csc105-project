<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Offer;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index', ['categories'=>Categories::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categories::findOrFail($id);
        return view('category.category', [
            'category'=>$category,
            'puppies'=>Offer::where('category_id', '=', $id)->paginate(25)
        ]);
    }

}
