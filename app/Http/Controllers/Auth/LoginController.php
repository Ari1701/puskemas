<?php

namespace App\Http\Controllers\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (auth()->check()) {
            $roleId = auth()->user()->role_id;
        
            if ($roleId == 1) {
                return '/dashboard';
            } elseif ($roleId == 3) {
                return '/admin';
            } elseif ($roleId == 2) { // Misalnya, role_id 2 untuk pengguna lain yang valid
                return '/antrian';
            } else {
                abort(403, 'TIDAK ADA AKSES!');
            }
        } else {
            abort(403, 'TIDAK ADA AKSES!');
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