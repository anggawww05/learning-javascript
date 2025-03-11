<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RegisterController extends Controller
{
    public function view()
    {
        return view('auth/register');
    }

    public function create(Request $request)
    {

        try {
            $validateData = $request->validate([
                'username' => 'required|max:55',
                'email' => 'email|required|unique:users',
                'number' => 'string|required',
                'password' => 'required|string',
                'confirmpassword' => 'required|string'
            ]);

            if ($validateData['password'] != $validateData['confirmpassword']) {
                return redirect()->back()->with('error', 'Password not match');
            }


            $validateData['password'] = bcrypt($validateData['password']);
            // dd($validateData);

            User::create([
                'name' => $validateData['username'],
                'email' => $validateData['email'],
                'number' => $validateData['number'],
                'password' => $validateData['password']
            ]);
            return redirect()->route('view.login')->with('success', 'Successing for register');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
