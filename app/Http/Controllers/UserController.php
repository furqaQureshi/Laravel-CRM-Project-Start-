<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users_create()
    {
        return view('layouts.User.create');
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->user_email;
        $user->password = Hash::make($request->user_password);
        $user->phone = $request->user_phone;
        $user->address = $request->user_address;
        $user->save();
        return redirect('/user/data')->with(['Success' => "User Create is SuccessFully...."]);
    }
    public function store()
    {
        $user = User::all();
        return view('layouts.User.index', ['user' => $user]);
    }
    public function edit($id)
    { 
        $user = User::find($id);
        return view('layouts.User.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user/data')->with(['Success' => "User Edit is SuccessFully...."]);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user/data');
    }
    public function export_user()
    {
        $user = User::all();
        $header = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="users.csv"'
        ];

        $columns = ['first_name', 'last_name', 'email', 'phone', 'address'];

        $callback = function () use ($user, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($user as $users) {
                $row['first_name'] =  $users['first_name'];
                $row['last_name'] =  $users['last_name'];
                $row['email'] = $users['email'];
                $row['phone'] = $users['phone'];
                $row['address'] = $users['address'];
                fputcsv($file, array(
                    $row['first_name'] = $row['first_name'],
                    $row['last_name'] = $row['last_name'],
                    $row['email'] = $row['email'],
                    $row['phone'] = $row['phone'],
                    $row['address'] = $row['address']
                ));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $header);
    }
}
