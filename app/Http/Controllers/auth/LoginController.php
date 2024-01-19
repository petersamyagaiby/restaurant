<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::user()){
            return redirect('/');
        }
        return view('auth.login');
    }

    public function handle_login(Request $request)
    {
        $data = $request->all();
        $cred = Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
        if ($cred) {
            if(Auth::user() && Auth::user()->is_admin){
                return redirect('/admin');
            }
            return redirect()->route('profile');
        }
        
        return back()
            // ->withInput($request->only('email'))
            ->with('error', 'Invalid credentials. Please try again.');
    }

} 
