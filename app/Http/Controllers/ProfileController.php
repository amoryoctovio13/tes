<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class ProfileController extends Controller
{
    public function show($id)
    {
        $users = User::find($id);

        return view('page.profile', compact('users','profile'));
    }
    public function update(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('/profile');
    }
 
    
}
