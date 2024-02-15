<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'y_welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if (auth()->user()->role == 1) {
                return redirect()->route('dashboard'); //ถ้ามีค่าเท่ากับ 1 ให้ไปหน้า dashboard หรือหน้าหลังบ้าน
            } else {
                return redirect()->route('home'); //ถ้ามีค่าเท่ากับ 0 ให้ไปหน้า home หรือหน้าบ้าน
            }
        }else{
            return redirect()->route('login'); //ถ้า email,pass ผิดก็จะกลับไปหน้า login
        }
    }
}
