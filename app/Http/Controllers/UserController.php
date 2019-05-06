<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Offer;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {

        return view('dashboard.dashboard_user', [
            'offers'=>Offer::where('user_id', '=', Auth::user()->id)->paginate(30),
            'user' => User::findOrFail(Auth::user())->first()
        ]);

    }


    public function update(UserEditRequest $request, $id)
    {
        if(Auth::user()->id==$id) {
            $user = User::findOrFail(Auth::user()->id);
            if (trim($request->password) == '') {
                $data = $request->except('password');
            } else {
                $data = $request->all();
                $data['password'] = bcrypt($request->password);
            }

            $photo = new Photo();
            if ($file = $request->file('photo')) {
                $data['photo_id'] = $photo->photoUpload($request->file('photo'), 'user_', '0', Auth::user()->id);
            }
            $user->update($data);
        }
        return redirect('/dashboard');
    }

    public function updateId(Request $request)
    {

        $photo = new Photo();
        if ($file = $request->file('photoId')) {
            $photo->photoUpload($request->file('photoId'), 'verify_', '0', Auth::user()->id);
        }
        return redirect('/dashboard');
    }
}
