<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;

class UserController extends Controller
{
    public function index() {
        return view('user.index', array('user' => Auth::user()));
    }

    public function create()
    {
        return view('users.create', compact('users'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:5000',
            'avatar' => 'image|mimes:jpeg,png|between:0,1024'
        ]);

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(64, 64)->save(public_path('/images/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->update();
        } else {
            $user = Auth::user();

            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->update();
        }

        return redirect('user');
    }

    public function show() {

    }

    public function edit() {
        return view('user.edit', array('user' => Auth::user()));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}
