<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // user registration:
    public function register(Request $request){
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        $user = User::create($fields);

        Auth::login($user);

        event(new Registered($user));

        return redirect()->route('home');
    }


    public function verifyNotce(){
        return view('auth.verify-email');
    }

    public function verifyEmail(EmailVerificationRequest $request){
        $request->fulfill();

        return redirect()->route('dashboard');
    }


    public function verifyHandler(Request $request){
        $request->user()->SendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }


    // user login:
            public function login(Request $request){
                $fields = $request->validate([
                'email' => ['required', 'max:255', 'email'],
                'password' => ['required']
                ]);

                if(Auth::attempt($fields, $request->remember)){
                    return redirect()->intended('dashboard');
                }else{
                    return back()->withErrors(['faild' => 'The provided credentials do not match our records']);
                }
            }

        // logout user:
        public function logout(Request $request){
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        }
}
