<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use Hash;

class RegistrationController extends Controller
{
  public function create(){
      return view('registration.create');
  }

  public function store(RegistrationForm $form){
    $form->persist();
    //Redicrect to home
    return redirect()->home();
  }
}
