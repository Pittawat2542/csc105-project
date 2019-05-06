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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('static.dashboardPage.announcement', [
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
        $data = $request->except('user_id');
        $data['user_id'] = Auth::user()->id;
        $lastId = Offer::create($data)->id;
        return redirect('/static/announcement/addpictures/'.$lastId);
    }

    public function addPictures($id)
    {
        $offer = Offer::findOrFail($id);
        if(Auth::user()->id==$offer->user_id || Auth::user()->isAdmin()) {
            return view('static.dashboardPage.annoucementPictures', ['offer'=>$offer]);
        }
        return redirect()->back();
    }

    public function storePictures(Request $request)
    {

        $offer = Offer::findOrFail($request->offer_id);
        if(Auth::user()->id==$offer->user_id || Auth::user()->isAdmin()) {
            $photo = new Photo();
            if ($file = $request->file('photo')) {
                $newPhoto_id = $photo->photoUpload($request->file('photo'), 'offer_', $request->offer_id, Auth::user()->id);
                $offer = Offer::findOrFail($request->offer_id);
                $offer->photo_id = $newPhoto_id;
                $offer->save();
            }

            if ($request->photoadd) {
                foreach ($request->photoadd as $photoad) {
                    $photo->photoUpload($photoad, 'offer_', $request->offer_id, Auth::user()->id);
                }
            }
        }
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puppy = Offer::findOrFail($id);
        $photo = Photo::where('offer_id', '=', $puppy->id)->get();
        return view('static.puppiesPage.puppiesPage', [
            'puppy'=>$puppy,
            'photos'=>$photo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
            //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id || Auth::user()->isAdmin()) {
            return view('static.dashboardPage.annoucementEdit', [
                'offers' => $offer,
                'categories'=>Categories::pluck('breed', 'id')->all()
                ]);
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id || Auth::user()->isAdmin()) {
            $offer->update($request->all());
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        //Checking if offer belongs to user
        if(Auth::user()->id==$offer->user_id) {
            $offer->delete();
        }
        return redirect()->back();
    }
}
