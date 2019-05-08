<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;

use App\Photo;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.users.index', ['users' => User::paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(UserStoreRequest $request)
    {
        //we can save user without password  :D
        if (trim($request->password) == '') {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
        }

        $photo = new Photo();
        if($file = $request->file('photo')){
            $data['photo_id'] = $photo->photoUpload($request->file('photo'), 'user_', '0', Auth::user()->id);
        }
        User::create($data);

        return redirect('/admin');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit', [
            'user' => User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
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
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *F
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/admin');
    }
}
