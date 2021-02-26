<?php

namespace App\Http\Controllers\Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request)
    {
        // if (auth()->user()->level == 'admin') {
        //     return redirect('/home');

        // }
        // elseif (auth()->user()->level == 'user') {
        //     return redirect('/homepublik');
        // }
        if ($request->user()->level == 'admin') { // do your magic here
            $credentials = $request->only($this->username(), 'password');
            
            return redirect('/home');
        }
        elseif ($request->user()->level == 'user') { // do your magic here
            $credentials = $request->only($this->username(), 'password');
            return redirect('/homepublik');
        }
        // if ($request->user()->level == "admin") { // do your magic here
        //     $credentials = $request->only($this->username(), 'password');
            
        //     return redirect('/home');
            // if($request->user()->alamat_lengkap == null){
            //     return redirect()->route('detail.user');
            // }
            // else{
            //     return redirect()->route('home.guest');
            // }
        // }
        // elseif ($request->user()->level == "user") { // do your magic here
        //     $credentials = $request->only($this->username(), 'password');
        //     return redirect('/homepublik');
        //     // if($request->user()->alamat_lengkap == null){
        //     //     return redirect()->route('detail.user');
        //     // }
        //     // else{
        //     //     return redirect()->route('home.guest');
        //     // }
        // }
    }

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
