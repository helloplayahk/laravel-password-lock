<?php

namespace Playa\PasswordLock;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasswordLockController extends Controller
{

    public function __construct()
    {

    }

    public function login(Request $request){
        if(!$request->has('invite_password') || $request->invite_password == "" ){
            return back()->with('error', 'Please fill in the invitation password');
        }

        if($request->invite_password != config('playa-password-lock.invite_password')){
            return back()->with('error', 'Invalid invitation password');
        }

        $request->session()->put('playa-password-lock-authed', true);
        return back();
    }

}
