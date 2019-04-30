<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
//    /**
//     * @param Request $request
//     */
//    public function store(Request $request){
//
//        $photo = new Photo;
//        if($file = $request->file('file')){
//            $photo->photoUpload($request->file('file'), 'offer_', $request->offer_id,  Auth::user()->id);
//        }
//
//    }
//
//    /**
//     * @param $id
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function destroy($id) {
//
//        $photo = Photo::findOrFail($id);
//
//        //Check if picture belongs to user  but its not tested
//        if(Auth::user()->id==$photo->user_id) {
//            if (!empty($photo->file)) unlink(public_path() . $photo->file);
//            $photo->delete();
//        }
//    }

    public function createOffer($id) {
        return view('offer.addPictures', [
            'offer'=>Offer::findOrFail($id)
        ]);
    }

}
