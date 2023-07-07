<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('/register');
    }

    // public function store(Request $request)
    // {
    //     $rules = [
    //         'username' => ['required', 'unique:data_user'],
    //         'email' => ['required'],
    //         'password1' => ['required', 'min:8'],
    //     ];

    //     $validatedData = $request->validate($rules);

    //     $validatedData['password1'] = Hash::make($validatedData['password1']);
    //     $validatedData['role'] = 'user';

    //     User::create($validatedData);

    //     return redirect('/login')->with('success');

    // }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email:rfc,dns'],
            'password1' => ['required', 'min:8', 'regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'],
            'password2' => ['required', 'min:8', 'same:password1'],
        ]);

        User::create([
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password1']),
        ]);

        $request->session()->flash('pesan', "Penambahan data {$validateData['username']} berhasil");
        return redirect()->route('login');
    }
}

