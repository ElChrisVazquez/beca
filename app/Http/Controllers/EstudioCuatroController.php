<?php

namespace App\Http\Controllers;

use App\Models\EstudioUno;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EstudioCuatroController extends Controller
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
                        return redirect('/tres');
                        break;
                    case 3:
                        Alert::success(
                            'Estudio (3/4)',
                            session('estudiante')->nombre . ' ' . session('estudiante')->paterno
                        );
                        return view('formatos.cuatro', [
                            'title' => 'Hogar y servicios'
                        ]);
                        return redirect('/cuatro');
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
        dd($rquest->all());
    }
}
