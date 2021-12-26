<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowPostController extends Controller
{
    public function show(){
        $posts = DB::table('posts')
        ->select('*')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->join('categories', 'categories.category_id', '=', 'posts.category_id')
        ->get();
        return view('trueIndex',compact('posts'));
    }
}
