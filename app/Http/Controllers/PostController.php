<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create(){
    
        return view('createpost');
    }

    public function index()
    {
        $posts = Post::all();
        $count=DB::table('likes')
        ->select('user_id')
        ->distinct('user_id')
        ->count('user_id');
        //return $count;
        // $count=DB::table('likes')
        // ->count('id');
        
        return view('posts',['posts'=>$posts,'count'=>$count]);
    }

    public function homep()
    {
        $posts = Post::all();
        return view('dhome',['dhome'=>$posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'body' => 'required'
       ]);
        $title = $request->input('title');
        if(Post::latest()->first() !== null)
        {
        $postId = Post::latest()->first()->id + 1;
        } 
       else{
        $postId = 1;
       }
       $slug = Str::slug($title, '-') . '-' . $postId;
       $user_id = Auth::user()->id;
       $body = $request->input('body');
       $post = new Post();
       $post->title = $title;
       $post->slug = $slug;
       $post->user_id = $user_id;
       $post->body = $body;
       $post->save();
       return redirect()->back()->with('status', 'Post Created Successfully');
    }
}