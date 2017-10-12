<?php

namespace App\Http\Requests;

use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;
use Hash;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }

    public function persist(){
        $name = request('name');
        $email = request('email');
        $password = Hash::make(request('password'));
        $user = User::create(
            $this->only(['name', 'email', 'password'])
        );
        //Sign them in
        auth()->login($user);
        Mail::to($user)->send(new Welcome($user));
    }
}
