<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('index');
    }
}
class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
}

