<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected function authenticated(Request $request, $user)
    {
      $email = $request->email;
        $role = DB::table('users')->where('email', $email)->value('role');
        $pass = DB::table('users')->where('email', $email)->value('password');
        $name = DB::table('users')->where('email', $email)->value('name');
        $img = DB::table('users')->where('email', $email)->value('image');
        $id = DB::table('users')->where('email', $email)->value('id');
    if ($role == 'user') {// do your magic here
        return redirect()->route('publicIndex');
    }

    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
}
