<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PublicPagesController extends Controller
{
    public function index(){

        $categories=Category::all();

        return view('public_site.index',compact('categories'));
    }
    public function post($category_id){
        $cat_name = Category::where('category_id',$category_id)->first();
        $cat_name = $cat_name->category_name;

        $categories=Post::all()->where('category_id',$category_id);

        return view('public_site.posts',compact('categories','cat_name'));
    }

}
