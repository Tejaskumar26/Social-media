<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function like()
    {
        $likes= new Like();
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        //$likes->post_id="1";
        $likes->user_id=$user_id;
        $likes->u_name=$user_name;
        $likes->save();
        return redirect()->back();   
    }
    public function unlike()
    {
        $user= Auth::user()->id;
        DB::table('likes')->select('user_id')
        ->where('user_id','=',$user)
        ->delete();
        //return $post;
        return redirect()->back();
    }
}