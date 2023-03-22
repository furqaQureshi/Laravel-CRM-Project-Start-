<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function client_create()
    {
        $client = DB::table('organization')
        ->join('clients','clients.id','=', 'organization.id')
        ->select('organization.name', 'organization.id')
        ->get();
        return view('layouts.Client.create', ['client' => $client]);
    }
    public function create(Request $request)
    {
        $client = new Client();
        $client->id = $request->id;
        $oranizaton =  Organization::where('id', $request->id)->first();
        $client->name = $request->client_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();
        return redirect('/client/data', ['oranizaton' => $oranizaton]);
    }
    public function store()
    {
        return view('layouts.Client.index');
    }
}
