<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'domain' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'country_code' => 'required|string|max:255|exists:countries,code',
        ]);

        /** @var User */
        $user = Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->domain = $request->domain;
        $user->country_code = $request->country_code;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
