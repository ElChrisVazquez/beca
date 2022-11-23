<?php

namespace App\Http\Controllers;

use App\Models\EstudioUno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EstudioUnoController extends Controller
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
                        return redirect('/dos');
                        break;
                    default:
                        break;
                }
            } else {
                Alert::success(
                    'Bienvenido!',
                    session('estudiante')->nombre . ' ' . session('estudiante')->paterno
                );
                return view('formatos.uno', [
                    'title' => 'Información personal'
                ]);
            }
        }
    }

    public function setEstudio(Request $request)
    {
        // Se crea la validación
        $validator = Validator::make(
            $request->all(),
            [
                'estado' => 'required',
                'municipio' => 'required',
                'poblacion' => 'required',
                'exterior' => 'required|numeric',
                'interior' => 'nullable|alpha_num',
                'cp' => 'required|numeric',
                'telefono' => 'nullable|numeric',
                'celular' => 'nullable|numeric',
                'email' => 'required|string',
                'beca' => 'required|numeric',
                'beca_tipo' => 'nullable|numeric',
                'beca_cantidad' => 'nullable|numeric',
                'beca_insituto' => 'nullable|string',
                'dependencia' => 'required|string',
                'dependencia_parentesco' => 'nullable|string',
                'residencia' => 'required|string',
                'residencia_otro' => 'nullable|string',
                'trabajo' => 'required|string',
                'trabajo_nombre' => 'nullable|string',
                'trabajo_puesto' => 'nullable|string',
                'trabajo_tiempo' => 'nullable|string',
                'trabajo_telefono' => 'nullable|string',
                'trabajo_domicilio' => 'nullable|string'
            ],
            [
                'required' => 'Es necesario rellenar ese campo.',
                'string' => 'Debe ser solo texto',
                'numeric' => 'Debe ser tipo numerico',
                'min' => 'No cumple con la longitud necesaria.'
            ]
        )->validate();

        try {
            $estudio = new EstudioUno();
            $estudio->estudiante_id = session('estudiante')->id;
            $estudio->estado_id = ($request->estado != null) ? $request->estado : null;
            $estudio->municipio_id = ($request->municipio != null) ? $request->municipio : null;
            $estudio->poblacion_id = ($request->poblacion != null) ? $request->poblacion : null;
            $estudio->exterior = ($request->exterior != null) ? $request->exterior : null;
            $estudio->interior = ($request->interior != null) ? $request->interior : null;
            $estudio->cp = ($request->cp != null) ? $request->cp : null;
            $estudio->telefono = ($request->telefono != null) ? $request->telefono : null;
            $estudio->celular = ($request->celular != null) ? $request->celular : null;
            $estudio->email = ($request->email != null) ? $request->email : null;
            $estudio->beca = ($request->beca != null) ? $request->beca : null;
            $estudio->beca_tipo = ($request->beca_tipo != null) ? $request->beca_tipo : null;
            $estudio->beca_cantidad = ($request->beca_cantidad != null) ? $request->beca_cantidad : null;
            $estudio->beca_insituto = ($request->beca_insituto != null) ? $request->beca_insituto : null;
            $estudio->dependencia = ($request->dependencia != null) ? $request->dependencia : null;
            $estudio->dependencia_parentesco = ($request->dependencia_parentesco != null) ? $request->dependencia_parentesco : null;
            $estudio->residencia = ($request->residencia != null) ? $request->residencia : null;
            $estudio->residencia_otro = ($request->residencia_otro != null) ? $request->residencia_otro : null;
            $estudio->trabajo = ($request->trabajo != null) ? $request->trabajo : null;
            $estudio->trabajo_nombre = ($request->trabajo_nombre != null) ? $request->trabajo_nombre : null;
            $estudio->trabajo_puesto = ($request->trabajo_puesto != null) ? $request->trabajo_puesto : null;
            $estudio->trabajo_tiempo = ($request->trabajo_tiempo != null) ? $request->trabajo_tiempo : null;
            $estudio->trabajo_telefono = ($request->trabajo_telefono != null) ? $request->trabajo_telefono : null;
            $estudio->trabajo_domicilio = ($request->trabajo_domicilio != null) ? $request->trabajo_domicilio : null;
            $estudio->status_cita_id = 1;
            $estudio->save();

            return redirect('/dos');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
