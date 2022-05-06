<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::orderBy('created_at','DESC')->get();
        return $users;
    }
    public function getSingleUser($id){
        $user = User::find($id);
        return $user;
    }
    public function store(Request $request){
        if ($request->_id) {
            $user = User::find($request->_id);
        } else {
            $user = new User();
        }
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->gender = $request->gender;
        
        if ($request->file('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images'),$name);
            $user->image = $name;
        } 
        $user->save();
        
    }
    public function delete($id){
        $user = User::find($id)->delete;
    }
}
