<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Entra en modo admin
            if ($user->hasRole('Admin')) {
                return view('home', [
                    'title' => 'Inicio'
                ]);
                // Entra en modo Analista
            } else if ($user->hasRole('Analista')) {
                return view('home', [
                    'title' => 'Inicio'
                ]);
                
            } else {
                return view('main', [
                    'title' => 'Inicio'
                ]);
            }
        } else {
            return view('main', [
                'title' => 'Inicio'
            ]);
        }
    }
}
