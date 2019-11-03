<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin');
    }

    public function showAllUsers()
    {
        $users = User::all();
        return view('admin.all', compact('users'));
    }

    public function updateStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
    }
}
