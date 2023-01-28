<?php

namespace App\Http\Controllers;

class ConfirmablePasswordController extends Controller
{
    public function confirmPassword()
    {
        return view('auth.confirm-password');
    }
}
