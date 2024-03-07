<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\friendslists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function friendlist()
    {
        return view('friendlist');

    }
    public function frndlist()
    {
        $friends = friendslists::all();
        return view('friend',['friends'=>$friends]);
    }

    public function users()
    {
        $users= User::all();
        //$suggest=$users->name;
        return view('suggestion',['users'=>$users]);
    }

    public function addfriend()
    {
        //$users= User::all();   
        $friends= new friendslists();
        $friends->name = "";
        $friends->user_id= Auth::user()->id;
        $friends->save();
        return redirect()->back();
    }
}
