<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function RegisterView() {
        
        return view('RegisterView.RegisterView');

    }

    public function ListRegisterView() {
        
        return view('RegisterView.ListRegisterView');

    }
    
}
