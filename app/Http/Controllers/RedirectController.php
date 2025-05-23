<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectByRole()
    {
        $user = auth()->user();

        if (!$user) {
            // Якщо користувач не авторизований — на welcome
            return redirect()->route('welcome');
        }

        // Редірект залежно від ролі
        switch ($user->role) {
            case 1:
                return redirect()->route('chief.dashboard');
            case 2:
                return redirect()->route('admin.dashboard');
            case 3:
                return redirect()->route('doctor.dashboard');
            case 4:
                return redirect()->route('nurse.dashboard');
            default:
                // Якщо роль не відома — на welcome
                return redirect()->route('welcome');
        }
    }
}
