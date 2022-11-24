<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' =>'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
        {
            $validateData = $request-> validate([
                'name'=> 'required|max:225',
                'username'=> ['required', 'min:3', 'max:225', 'unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password'=>'required|min:5|max:225'

            ]);
            $validateData['password'] = bcrypt($validateData['password']);

            User::create($validateData);

            // $request->session()->flash('Berhasil', 'Selamat Berhasil Masuk!! Silahkan Masuk');

            return redirect('/login')->with('Berhasil', 'Selamat Berhasil Masuk!! Silahkan Masuk');
        }
}
