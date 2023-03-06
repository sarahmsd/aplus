<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected function authenticated(Request $request, $user) {

        if ($user->profil == 'Employeur') {
            return redirect()->route('dashboardEntrerprise');
        }elseif ($user->profil == 'Candidat') {
            return redirect()->route('home');
        }elseif ($user->profil == 'Ecole') {
            return redirect()->route('dashbord');
        }elseif ($user->profil == 'admin') {
            return redirect()->route('admin.dashboard');
        }
       
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
