<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        $validatedData = request()->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|unique:users,phone_number|regex:/^09\d{9}$/',
            'password' => 'required|min:3|confirmed',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'password' => Hash::make($validatedData['password'])

        ]);
        return redirect()->route('Panel');
    }

    public function login_student(Request $request)
    {

        $credentials = request()->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials))
        {
            $user = User::where('email' , $request->input('email'))->first() ;
            $name_user = $user->name ;
            return redirect()->route('Panel' , ['name' => $name_user]);
        }

        return back()->withErrors([
            'login' => 'اطلاعات وارد شده درست نمیباشد',
        ]);

    }

    public function login_admin(Request $request)
    {

        $credentials = request()->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->intended('Dashboard');
        }
        return back()->withErrors([
            'login' => 'اطلاعات وارد شده درست نمیباشد',
        ]);

    }

    public function isAdmin($email){
        $admin = Admin::find($email);
        if($admin == 1)
        {
            return true;
        }
    }

    public function logout()
    {

        if(Auth::check())
        {
            Auth::logout();
        }
        return redirect()->route('home');

    }

}
