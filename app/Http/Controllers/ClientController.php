<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{

    /**
     *
     * @return View
     */
    public function clients(): View
    {
        /** @var User */
        $clients = User::where('username', '!=', 'admin');
        return view('dashboard.clients', ['clients' => $clients->get()]);
    }

    /**
     *
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request, $clientId = null)
    {
        $client = $clientId ? User::find($clientId) : new User;

        $request->validate([
            'name'      => 'required|string',
            'username'  => 'required|string|max:255|unique:users,username,' . $client->id,
            'domain'    => 'required|string|unique:users,domain,' . $client->id,
            'country_code' => 'required|string|exists:countries,code',
            'password' => !$clientId ? 'required|string|min:8' : '',
        ]);

        $client->name = $request->name;
        $client->username = $request->username;
        $client->country_code = $request->country_code;
        $client->domain = $request->domain;
        $client->active = $request->active == 'true' ? 1 : 0;
        if ($request->password)
            $client->password = Hash::make($request->password);

        $client->save();

        $message = $clientId ? 'Client updated successfully' : 'Client added successfully';

        return response()->json(['client' => $client, 'success' => $message]);
    }


    /**
     *
     *
     * @param User $clients
     * @return RedirectResponse
     */
    public function destroy(Request $request, $clientId)
    {
        $client = User::find($clientId);
        $client->delete();

        return redirect()->back()->with('success', 'Client deleted successfully.');
    }
}
