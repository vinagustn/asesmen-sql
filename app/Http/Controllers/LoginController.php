<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //create
    public function create()
    {
        return view('first.login');
    }

    public function regCreate()
    {
        return view('first.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:20',
            'password' => 'required|min:8',
            'nama' => 'required|max:200',
            'gender' => 'required|max:1',
            'alamat' => 'required|max:250',
            'no_hp' => 'required|min:11|max:13'
        ]);

        User::create($validateData);
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->intended('/peminjaman');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    
}
