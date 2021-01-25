<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);
         if (Auth::attempt(['user' => $request->user,'password' => $request->password,'switch'=>1]))
         {
             return redirect('/home');
         }
         //return back()->withErrors(['user' => trans('auth.failed')])->withInput(request(['user']));
         return back()->withErrors(['user' => trans('auth.booom')])->withInput(request(['user']));
    }
    protected function validateLogin(Request $request)
    {
        $this->validate($request,['user' => 'required|string','password' => 'required|string']);

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
