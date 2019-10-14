<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public function index() {
        return view('profile.index', array('user' => Auth::user()));
    }

    public function update(Request $request) {

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(64, 64)->save(public_path('/images/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }

        return redirect('/profile');

    }

    public function show(){

    }

    public function edit() {
        return view('profile.edit', array('user' => Auth::user()));
    }
}
