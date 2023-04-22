<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Organization;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_create()
    {
        $client = Client::join('organization', 'client.organization_id', '=', 'organization.id')
            ->select('organization.name', 'organization.id')
            ->get();
        return view('layouts.Client.create', ['client' => $client]);
    }
    public function create(Request $request)
    {
        $client = new Client();
        $client->organization_id =  $request->organization_id;
        $client->name = $request->client_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();
        return redirect('/client/data');
    }
    public function store()
    {
        $client = Client::all();
        return view('layouts.Client.index', ["client" => $client]);
    }
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/client/data')->with('message', 'Subscription Successfully Deleted');
    }
}
