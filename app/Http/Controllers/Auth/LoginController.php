<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('adminLogout');
        $this->middleware('guest:reader')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:5',
            'password' => 'required|min:5'
        ]);

        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('Home');
        } else {
           return back()->withInput($request->only('username'));
        }
    }

     public function showReaderLoginForm()
    {
        return view('auth.login');
    }

    public function readerLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required|min:5',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('reader')->attempt(['username' => $request->username, 'password' => $request->password])){

            return redirect()->route('Home');
        }
        return back()->withInput($request->only('username'));
    }

    public function adminLogout(Request $request){
        auth('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('Home');
    }
}