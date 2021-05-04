<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use User;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:visitor')->except('logout');
    }


    // For Platform Admin Login
    public function showAdminLoginForm(Request $request){
        return view('auth.login', ['url'=>'/admin'] );
    }

    public function adminLogin( Request $request ) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|password'
        ]);

        if ( Auth::guard()->attempt([
            'email' => $request->email,
            'password' => $request->password], $request->get('remember') ) )
        {
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withInput($request->only('email', 'password'));
    }


    // Platform Visitor Login
    public function showVisitorLoginForm(Request $request){
        return view('frontend.pages.login', ['url'=>'visitor'] );
    }

    public function visitorLogin( Request $request ) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('visitor')->attempt([
            'email'     => $request->email, 
            'password'  => $request->password], 
            $request->get('remember'))) {

            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));
    }




    
}
