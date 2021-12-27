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
        ->join('comments', 'comments.post_id', '=', 'posts.post_id')
        ->where('posts.post_id', '=', 1)
        ->get();
        // dd($posts);
        return view('public_site.single_post',compact('posts'));
    }
}
