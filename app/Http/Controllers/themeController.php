<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class themeController extends Controller
{   
    public function themeChange() {
        if (!Session::has('theme')) {
            Session::put('theme', 'dark');
        } else {
            $currentTheme = Session::get('theme');
            $newTheme = ($currentTheme == 'dark') ? 'light' : 'dark';
            Session::put('theme', $newTheme);
        }

        return back();
    }
}