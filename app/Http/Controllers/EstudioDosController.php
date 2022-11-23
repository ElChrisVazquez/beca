<?php

namespace App\Http\Controllers;

use App\Models\EstudioDos;
use App\Models\EstudioUno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EstudioDosController extends Controller
{
    public function index()
    {
        if (session('errors')) {
            $error = "";
            foreach (session('errors')->getMessages() as $key => $value) {
                $error .= $key . ' - ' . $value[0] . '<br>';
            }
            Alert::html('Error', $error, 'error')->persistent('Dismiss');
        }

        if (session()->has('estudiante')) {

            $estudio = EstudioUno::where('estudiante_id', '=', session('estudiante')->id)->first();

            if ($estudio != null) {
                switch ($estudio->status_cita_id) {
                    case 1:
                        Alert::success(
                            'Estudio (1/4)',
                            session('estudiante')->nombre . ' ' . session('estudiante')->paterno
                        );
                        return view('formatos.dos', [
                            'title' => 'Información familiar'
                        ]);
                        break;
                    case 2:
                        return redirect('/tres');
                        break;
                    default:
                        break;
                }
            } else {
                return redirect('/uno');
            }
        }
    }

    public function setEstudio(Request $request)
    {

        // Se crea la validación
        $validator = Validator::make(
            $request->all(),
            [
                'padres' => 'required|numeric',
                'padres_edad_padre' => 'required|numeric',
                'padres_edad_madre' => 'required|numeric',
                'padres_juntos' => 'required|numeric',
                'padres_civil' => 'required|numeric',
                'padres_padre_escolaridad' => 'required|numeric',
                'padres_madre_escolaridad' => 'required|numeric',
                'padre_nombre' => 'required|string',
                'padre_trabajo' => 'nullable|string',
                'padre_cargo' => 'nullable|string',
                'padre_tiempo' => 'nullable|string',
                'padre_domicilio' => 'nullable|string',
                'padre_telefono' => 'nullable|string',
                'madre_nombre' => 'required|string',
                'madre_trabajo' => 'nullable|string',
                'madre_tiempo' => 'nullable|string',
                'madre_cargo' => 'nullable|string',
                'madre_domicilio' => 'nullable|string',
                'madre_telefono' => 'nullable|string'
            ],
            [
                'required' => 'Es necesario rellenar ese campo.',
                'string' => 'Debe ser solo texto',
                'numeric' => 'Debe ser tipo numerico',
                'min' => 'No cumple con la longitud necesaria.'
            ]
        )->validate();

        try {
            $estudio = new EstudioDos();
            $estudio->estudiante_id = session('estudiante')->id;
            $estudio->padres = ($request->padres != null) ? $request->padres : null;
            $estudio->padres_edad_padre = ($request->padres_edad_padre != null) ? $request->padres_edad_padre : null;
            $estudio->padres_edad_madre = ($request->padres_edad_madre != null) ? $request->padres_edad_madre : null;
            $estudio->padres_juntos = ($request->padres_juntos != null) ? $request->padres_juntos : null;
            $estudio->padres_civil = ($request->padres_civil != null) ? $request->padres_civil : null;
            $estudio->padres_padre_escolaridad = ($request->padres_padre_escolaridad != null) ? $request->padres_padre_escolaridad : null;
            $estudio->padres_madre_escolaridad = ($request->padres_madre_escolaridad != null) ? $request->padres_madre_escolaridad : null;
            $estudio->padre_nombre = ($request->padre_nombre != null) ? $request->padre_nombre : null;
            $estudio->padre_trabajo = ($request->padre_trabajo != null) ? $request->padre_trabajo : null;
            $estudio->padre_cargo = ($request->padre_cargo != null) ? $request->padre_cargo : null;
            $estudio->padre_tiempo = ($request->padre_tiempo != null) ? $request->padre_tiempo : null;
            $estudio->padre_domicilio = ($request->padre_domicilio != null) ? $request->padre_domicilio : null;
            $estudio->padre_telefono = ($request->padre_telefono != null) ? $request->padre_telefono : null;
            $estudio->madre_nombre = ($request->madre_nombre != null) ? $request->madre_nombre : null;
            $estudio->madre_trabajo = ($request->madre_trabajo != null) ? $request->madre_trabajo : null;
            $estudio->madre_tiempo = ($request->madre_tiempo != null) ? $request->madre_tiempo : null;
            $estudio->madre_cargo = ($request->madre_cargo != null) ? $request->madre_cargo : null;
            $estudio->madre_domicilio = ($request->madre_domicilio != null) ? $request->madre_domicilio : null;
            $estudio->madre_telefono = ($request->madre_telefono != null) ? $request->madre_telefono : null;

            dd($estudio);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
