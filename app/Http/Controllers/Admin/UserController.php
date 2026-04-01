<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'username'      => 'required|string|max:255|unique:users,username,' . Auth::user()->id,
            'domain'        => 'required|string|max:255',
            'password'      => 'nullable|string|min:6|confirmed',
            'country_id'    => 'required|integer|exists:countries,id',
        ]);

        /** @var User */
        $user = Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->domain = $request->domain;
        $user->country_id = $request->country_id;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
