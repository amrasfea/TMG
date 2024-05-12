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

    public function PlatinumHomePage() {
        return view('LoginView.PlatinumHomePage');
    }

    public function MentorHomePage() {
        return view('LoginView.MentorHomePage');
    }

    public function StaffHomePage() {
        return view('LoginView.StaffHomePage');
    }

    public function showLoginForm()
    {
        return view('LoginView.manageLoginview'); // Assuming 'manageLoginview' is your login view file
    }
}
