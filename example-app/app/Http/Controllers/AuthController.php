<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public  function login()
    {
        return view("auth.login");
    }
    public function LoginPost(Request $request)
    {
        $request->validate([
            "email" =>  "required",
            "password" =>  "required"
        ]);
        $credentials = $request->only("email","password");

        if (Auth::attempt($credentials)){
            return redirect()->intended(route("crud.index"));
        }
        return redirect(route("auth.index"))->with("error","Login failed");
    }
    public function register()
    {
        return view("auth.register");
    }
    public function RegisterPost(Request $request)
    {
      $request->validate([
         "fullname" =>  "required",
         "email" =>  "required",
         "password" =>  "required"
      ]);
      $user = new User();
      $user->name = $request->fullname;
      $user->email = $request->email;
      $user->password =Hash::make( $request->password);
      if ($user->save()){
          return redirect(route("login"))->with("success","User created successfully");
      }
      return redirect(route("register"))->with("error","Failed to create account");
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route("login"));
    }


    public function index()
    {
        $users = User::all();
        return view("auth.index",compact("users"));
    }



    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit-password', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('auth.index')->with('success', 'Parol mofaqiyatli o\'zgartirildi');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('auth.index')->with('success', 'mofaqiyatli ochirildi');

    }
}
