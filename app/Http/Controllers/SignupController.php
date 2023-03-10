<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('SignUp', [
            'title' => 'Sign Up',
            'active' => 'Sign Up'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|between:5,20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|between:5,20',
            'phone' => 'required|numeric',
            'address' => 'required|min:5',
            'Card_Number'=> 'required|digits:16'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/SignIn');

    }

}
