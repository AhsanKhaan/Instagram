<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class ProfilesController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {   //dd($user);
        $user=User::find($user);
        //dd($user);
        return view('home',["user"=>$user,]);
    }
}
