<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        return view('layouts.Organization.create');
    }
    public function organization_create(Request $request)
    {
        $organization = new Organization();
        $organization->name = $request->name;
        $organization->address = $request->address;
        $organization->website = $request->website;
        $organization->description = $request->description;
        $organization->save();
        return redirect('/organzition/data');
    }
    public function store()
    {
        $organization = Organization::all();
        return view('layouts.Organization.index', ['organization' => $organization]);
    }
    public function edit($id)
    {
        $organization = Organization::find($id);
        return view('layouts.Organization.edit', ['organization' => $organization]);
    }
    public function update(Request $request, $id)
    {
        $organization = Organization::find($id);
        $organization->name = $request->name;
        $organization->address = $request->address;
        $organization->website = $request->website;
        $organization->description = $request->description;
        $organization->save();
        return redirect('/organzition/data');
    }
    public function destory($id)
    {
        $organization = Organization::find($id);
        $organization->delete();
        abort(404);
        return redirect('/organzition/data');
    }
}
