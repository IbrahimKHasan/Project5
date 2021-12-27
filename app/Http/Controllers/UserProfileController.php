<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
  public function destroy($post)
  {
      Post::where('post_id',$post)->delete();
      return redirect('/user_profile')->with('success','تم حذف المنشور بنجاح');
  }
}
