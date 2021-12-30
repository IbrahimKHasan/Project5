<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
  public function destroy($post)
  {
      Post::where('post_id',$post)->delete();
      return redirect('/user_profile')->with('success','Post Deleted Succesfully');
  }
  public function filter(Request $request)
  {
    $posts=Post::all()->where('category_id',$request->filter);

    return view("users\user_pofile",compact('posts'));
  }
  public function add(Request $request)
  {
    // dd($request->post_id);
    $id = Auth::user()->id;
    Comment::create([
        'comment'=>$request->comment,
        'user_id'=>$id,
        'post_id'=>$request->post_id,
      ]);
      return redirect()->back()->with('success','Comment Added Succesfully');
  }
}
