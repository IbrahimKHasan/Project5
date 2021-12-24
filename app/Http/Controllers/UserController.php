<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function manage_user(){

     $user=User::all();
        return view('pages.manage_user',compact('user'));
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_user(Request $request){

            User::create($request->all());

            return redirect()->route('manage_user');
    }
    public function edit_user(Request $request)
    {
        ddd($request);
        return view('users.edit',compact('request'));
    }

    public function update_user(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('show')
                        ->with('success','Product updated successfully');
    }
    public function destroy(User $user)
    {

        $user->delete();



        return redirect()->route('show')
                       ->with('success','Product deleted successfully');

    }
}
