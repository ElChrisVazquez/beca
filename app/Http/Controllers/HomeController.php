<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function inicio()
    {
        if (session('errors')) {
            $error = "";
            foreach (session('errors')->getMessages() as $key => $value) {
                $error .= $key . ' - ' . $value[0] . '<br>';
            }
            Alert::html('Error', $error, 'error')->persistent('Dismiss');
        }

        return view('main', [
            'title' => 'Inicio'
        ]);
    }

    public function checkStudent(Request $request)
    {

        // // Se crea la validación
        $validator = Validator::make(
            $request->all(),
            [
                'matricula' => 'required|min:10|max:10',
            ],
            [
                'required' => 'Es necesario rellenar ese campo.',
                'min' => 'No cumple con la longitud necesaria.',
                'max' => 'No cumple con la longitud necesaria.'
            ]
        );

        // Si falla la validación
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        try {
            $estudiante = Estudiante::where('matricula', '=', $request->matricula)->firstOrFail();

            return redirect('uno');
        } catch (\Throwable $th) {
            return back()->withErrors([
                'Error' => 'Estimado alumno: La matrícula ingresada no coincide con ningún registro, favor de verificar e intentar de nuevo.',
            ]);
        }
    }
}
