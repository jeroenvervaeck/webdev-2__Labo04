<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {

        $clients = Client::orderBy('id', 'desc')->get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function getCreate(){
        return view('clients.edit', [
            'client' => null
        ]);
    }

    public function getEdit(Client $client) {
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    public function postSave(Request $r) {

        $validationRules = [
            'title' => 'required|in:mr,mw,juf,dr',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'provincie' => 'required|max:50',
        ];

        if($r->id) {
            // Klant updaten
            $validationRules['email'] = 'required|max:255|email|unique:clients,email,' . $r->id;

        } else {
            // Nieuwe klant
            $validationRules['email'] = 'required|max:255|email|unique:clients,email';

        }

        $r->validate($validationRules);

        $data = [
            'title' => $r->title,
            'email' => $r->email,
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'address' => $r->address,
            'postal_code' => $r->postal_code,
            'city' => $r->city,
            'provincie' => $r->provincie,
        ];

        if($r->id) {
            $client = Client::where('id', $r->id)->first();
            $client->update($data);
        } else {
            $client = Client::create($data);
        }

        return redirect()->route('clients');
    }

    public function postDelete($id) {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients');
    }

}
