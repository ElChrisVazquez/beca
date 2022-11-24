<?php

namespace App\Http\Controllers;

use App\Models\EstudioUno;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EstudioTresController extends Controller
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
                    case 2:
                        Alert::success(
                            'Estudio (2/4)',
                            session('estudiante')->nombre . ' ' . session('estudiante')->paterno
                        );
                        return view('formatos.tres', [
                            'title' => 'Información familiar'
                        ]);
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
        dd($request->all());
    }
}
