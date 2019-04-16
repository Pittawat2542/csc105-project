<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Offer;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('offers.index', [
            'offers'=>Offer::paginate(30),
            'categories'=>Categories::All()
        ]);
    }

    public function myOffers()
    {
        $offers = Offer::whereUser_id(Auth::user()->id);
        return view('offers.index', [
            'offers'=>$offers->paginate(30)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.create', [
            'categories'=>Categories::pluck('breed', 'id')->all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        Offer::create($request);
        return redirect('/offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show(offers $offers)
    {
        return view('offers.index', [
            'offers'=>Offer::paginate(30),
            'photos'=>Photo::whereOffer_id($offers)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function edit(offers $offers)
    {
        $offer = Offer::findOrFail($offers);
        //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id) {
            return view('offer.edit', ['offer' => Offer::findOrFail($offer)]);
        }
        return redirect('/offers');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offers $offers)
    {
        $offer = Offer::findOrFail($offers);
        //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id) {
            $offer->update($request);
            return redirect('/offers');
        }
        return redirect('/offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(offers $offers)
    {
        $offer = Offer::findOrFail($offers);
        //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id) {
            $offer->delete();
            return redirect('/offers');
        }
        return redirect('/offers');
    }
}
