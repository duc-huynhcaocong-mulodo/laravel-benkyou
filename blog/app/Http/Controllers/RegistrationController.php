<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use Hash;

class RegistrationController extends Controller
{
  public function create(){
      return view('registration.create');
  }

  public function store(){
    //Validate the form
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
    ]);
    //Create and save the user
    $name = request('name');
    $email = request('email');
    $password = Hash::make(request('password'));
    $user = User::create(['name' => $name,
                        'email' => $email,
                        'password' => $password]);
    //Sign them in
    auth()->login($user);
    \Mail::to($user)->send(new Welcome($user));
    //Redicrect to home
    return redirect()->home();
  }
}
