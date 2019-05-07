<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categories::with('offer')->get();
        return view('index', ['categories'=> $categories]);
    }

    public function autocomplete(){
        $term = trim(Input::get('term'));

        $OffersResult = Home::searchResults('offers', $term, '/offer/',
            'Puppy to Adopt:', 'name');
        $CategoriesResults = Home::searchResults('categories', $term, '/categories/',
            'Breed:', 'breed');
        $results = [];

        $results = array_merge($OffersResult, $CategoriesResults);

        return  json_encode($results);
    }

}
