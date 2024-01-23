<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
// use Session;

class LoginController extends Controller
{
    public function login() 
    {
        if (Auth::check())              // Digunakan untuk apakah user is logged in
        {
            return redirect('home');    // perbedaan redirect dan view : https://laracasts.com/discuss/channels/laravel/whats-the-difference-between-redirect-and-return-view?page=1&replyId=132515
        }

        else 
        {
            return view('login');       // kalo di ::check ngga ada token authentication, kembali ke login.blade.php
        }
    }


    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),            // double arrow operator di array fungsinya untuk bilang kalau apa yang ada di sisi kiri
            'password' => $request->input('password')       // itu nilainya sama dengan di sisi kanan
        ];

        if(Auth::attempt($data))        //  The user will be retrieved by the value of the email column. If the user is found, the hashed password stored in the database will be compared with the hashed password value passed to the method via the array.
        {
            return redirect('home');       
        }

        else
        {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }


    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
