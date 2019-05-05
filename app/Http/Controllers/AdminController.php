<?php

namespace App\Http\Controllers;


use App\Admin;
use App\Offer;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $peopeToVerify = Photo::where('path', 'LIKE', 'verify_%')->take(25)->get();

        return view('static.dashboardPage.dashboard_admin', [
            'toVerify' => $peopeToVerify,
            'users' => User::paginate(25),
            'offers' => Offer::paginate(25)
        ]);
    }

    public function approve($id) {
        $user = User::findOrFail($id);
        $user->is_verified = 1;
        $user->save();

        return redirect('/admin/');
    }

}
