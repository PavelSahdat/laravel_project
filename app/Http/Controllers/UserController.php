<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        User::create(
            array(
                "name"=>"Pavel Sahdat",
                "email"=>"pavelchy@gmail.com",
                "password"=>bcrypt("sj2524"),
            )
        );

    }
    public function userShow(){
        $user = User::all()->toArray();
        dump($user);
        return view('user',array('user'=>$user));
    }
}

