<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('frontend.wishlist', compact('user', 'wishlists'));
    }

    public function store($id)
    {

        $status=Wishlist::where('user_id',Auth::user()->id)
            ->where('offer_id',$id)
            ->first();

        if(isset($status->user_id) and isset($id))
        {
            $this->destroy($status->id);
        }
        else
        {
            $wishlist = new Wishlist;

            $wishlist->user_id = Auth::user()->id;
            $wishlist->offer_id = $id;
            $wishlist->save();

            return redirect()->back()->with('flash_message',
                'Item, '. $wishlist->offer_id->title.' Added to your wishlist.');
        }

    }

    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
        return redirect()->route('wishlist.index')
            ->with('flash_message',
                'Item successfully deleted');
    }
}
