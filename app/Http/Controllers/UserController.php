<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderby('id')->get();
        // dd($users);
        return view('usuarios', compact('users'));
    }

    public function edit($id)
    {
        //$idusers = User::where('id',$id)->get();
        $idusers = User::FindOrFail($id);
        // dd($user);
        return view('edituser', compact('idusers'));
    }

    public function update(Request $request, $id) {
        // dd($request);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->name = Input::get('name');
        // $user->email = Input::get('email');
        $user->save();
        return redirect(route('user.edit',$id))->with('notice', 'El usuario ha sido modificado correctamente.');
        // return Redirect::to(route('user.update',$id))->with('notice', 'El usuario ha sido modificado correctamente.');
     }

    

}
