<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // dd($credentials);
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('view.dashboard');
            }

        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('error', 'email or password doesnt exist');
        }

    }
}
