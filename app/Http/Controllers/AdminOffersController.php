<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Offer;
use App\Photo;
use Illuminate\Http\Request;

class AdminOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('offers.index', [
            'offers'=>Offer::paginate(30)
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
        return redirect('/admin/offers');
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
        return view('offer.edit', ['offer' => Offer::findOrFail($offers)]);
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
        $offer->update($request);
        return redirect('/admin/offers');
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
        $offer->delete();
        return redirect('/admin/offers');
    }
}
