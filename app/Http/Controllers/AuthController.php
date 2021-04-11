<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\User;
use Illuminate\Auth\SessionGuard;
use Illuminate\Routing\Redirector;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function postLogin(Request $request)
    {
        request()->validate([
            'email'=>'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return FacadesRedirect::to("login")->withSuccess('Oppes! vos données sont incorrectes');
    }


    public function postRegister(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return FacadesRedirect::to("dashboard")->withSuccess('Génial! Vous vous êtes connecté avec succès ');
    }

    public function dashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return FacadesRedirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        SessionGuard::flush();
        Auth::logout();
        return Redirect('login');
    }

}
