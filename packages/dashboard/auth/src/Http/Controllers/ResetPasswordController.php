<?php

namespace Dashboard\Auth\src\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth::passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }


}
