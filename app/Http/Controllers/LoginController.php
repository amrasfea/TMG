<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function manageLoginview() {
        return view('LoginView.manageLoginview');
    }

    public function manageForgotPasswordView() {
        return view('LoginView.manageForgotPasswordView');
    }
}
