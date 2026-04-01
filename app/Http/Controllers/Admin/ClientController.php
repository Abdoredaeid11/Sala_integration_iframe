<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     *
     *
     * @param Request $request
     * @return View

     */
    public function clients(Request $request): View
    {
        /** @var User */
        $clients = User::where('username', '!=', 'admin')->orderBy('name');
        return view('admin.client.clients', ['clients' => $clients->get()]);
    }

    /**
     *
     *
     * @param Request $request
     */
    public function store(Request $request, $clientId = null)
    {
        $client = $clientId ? User::find($clientId) : new User;

        $request->validate([
            'name'                      => 'required|string',
            'username'                  => 'required|string|max:255|unique:users,username,' . $client->id,
            'domain'                    => 'required|string',
            'active'                    => 'required|in:0,1',
            'password'                  => $clientId ? 'nullable|string|min:6|confirmed' : 'required|string|min:6|confirmed',
            'password_confirmation'     => $clientId ? 'nullable|string|min:6' : 'required|string|min:6',
            'country_id'                => 'required|integer|exists:countries,id',
        ]);

        $client->name = $request->name;
        $client->username = $request->username;
        $client->country_id = $request->country_id;
        $client->domain = $request->domain;
        $client->active = $request->active == '1' ? 1 : 0;

        if ($request->password)
            $client->password = Hash::make($request->password);

        $client->save();

        $message = $clientId ? 'Client updated successfully' : 'Client added successfully';

        return response()->json(['client' => $client, 'success' => $message]);
    }

    /**
     *
     *
     * @param Request $request
     */
    public function update(Request $request, $clientId)
    {
        return $this->store($request, $clientId);
    }

    /**
     * Delete client
     *
     * @param Request $request
     * @param int $clientId
     * @return RedirectResponse
     */
    public function destroy(Request $request, $clientId)
    {
        try {
            $client = User::findOrFail($clientId);
            $client->delete();

            return redirect()->back()->with('success', 'Client deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete client.');
        }
    }
}
