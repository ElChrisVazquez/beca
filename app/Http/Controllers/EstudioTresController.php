<?php

namespace App\Http\Controllers;

use App\Models\EstudioTres;
use App\Models\EstudioUno;
use App\Models\FamiliarCasa;
use App\Models\FamiliarGastos;
use App\Models\FamiliarInstituto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

                        $parentescos = DB::table('c_parentescos')
                            ->get();

                        $escolaridades = DB::table('c_escolaridades')
                            ->get();

                        return view('formatos.tres', [
                            'title' => 'Información familiar',
                            'parentescos' => $parentescos,
                            'escolaridades' => $escolaridades
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
        // dd($request->all());
        // Se crea la validación
        $validator = Validator::make(
            $request->all(),
            [
                'hermanos' => 'required|integer',
                'hermanos_residen' => 'required|integer',
                'dependencia' => 'required|integer',
                'seguro' => 'required|integer',
                'seguro_especifique' => 'nullable|string',
                'familia_trabajo' => 'required|numeric',
                'familia_aporte'  => 'required|numeric',
                'ingreso_propio'  => 'required|numeric',
                'ingreso_padre' => 'required|numeric',
                'ingreso_conyuge'  => 'required|numeric',
                'ingreso_hermanos' => 'required|numeric',
                'ingreso_madre'  => 'required|numeric',
                'ingreso_otro' => 'required|numeric',
                'gasto_total'  => 'required|numeric',
                'foraneo_total'  => 'required|numeric',
            ],
            [
                'required' => 'Es necesario rellenar ese campo.',
                'string' => 'Debe ser solo texto',
                'numeric' => 'Debe ser tipo numerico',
                'min' => 'No cumple con la longitud necesaria.'
            ]
        )->validate();

        try {
            $estudio = new EstudioTres();
            $estudio->estudiante_id = session('estudiante')->id;
            $estudio->hermanos = ($request->hermanos != null) ? $request->hermanos : null;
            $estudio->hermanos_residen = ($request->hermanos_residen != null) ? $request->hermanos_residen : null;
            $estudio->dependencia = ($request->dependencia != null) ? $request->dependencia : null;
            $estudio->seguro = ($request->seguro != null) ? $request->seguro : null;
            $estudio->seguro_especifique = ($request->seguro_especifique != null) ? $request->seguro_especifique : null;
            $estudio->familia_trabajo = ($request->familia_trabajo != null) ? $request->familia_trabajo : null;
            $estudio->familia_aporte = ($request->familia_aporte != null) ? $request->familia_aporte : null;
            $estudio->ingreso_propio = ($request->ingreso_propio != null) ? $request->ingreso_propio : null;
            $estudio->ingreso_padre = ($request->ingreso_padre != null) ? $request->ingreso_padre : null;
            $estudio->ingreso_conyuge = ($request->ingreso_conyuge != null) ? $request->ingreso_conyuge : null;
            $estudio->ingreso_hermanos = ($request->ingreso_hermanos != null) ? $request->ingreso_hermanos : null;
            $estudio->ingreso_madre = ($request->ingreso_madre != null) ? $request->ingreso_madre : null;
            $estudio->ingreso_otro = ($request->ingreso_otro != null) ? $request->ingreso_otro : null;
            $estudio->gasto_total = ($request->gasto_total != null) ? $request->gasto_total : null;
            $estudio->foraneo_total = ($request->foraneo_total != null) ? $request->foraneo_total : null;
            $estudio->save();

            if (isset($request->familiar_nombre)) {
                for ($i = 0; $i < count($request->familiar_nombre); $i++) {
                    $familiar_gastos = new FamiliarGastos();
                    $familiar_gastos->estudiante_id = session('estudiante')->id;
                    $familiar_gastos->familiar_nombre = ($request->familiar_nombre[$i] != null) ? $request->familiar_nombre[$i] : null;
                    $familiar_gastos->familiar_edad = ($request->familiar_edad[$i] != null) ? $request->familiar_edad[$i] : null;
                    $familiar_gastos->familiar_parentesco = ($request->familiar_parentesco[$i] != null) ? $request->familiar_parentesco[$i] : null;
                    $familiar_gastos->familiar_estudios = ($request->familiar_estudios[$i] != null) ? $request->familiar_estudios[$i] : null;
                    $familiar_gastos->save();
                }
            }
            if (isset($request->casa_nombre)) {
                for ($i = 0; $i < count($request->casa_nombre); $i++) {
                    $familiar_casa = new FamiliarCasa();
                    $familiar_casa->estudiante_id = session('estudiante')->id;
                    $familiar_casa->casa_nombre = ($request->casa_nombre[$i] != null) ? $request->casa_nombre[$i] : null;
                    $familiar_casa->casa_edad = ($request->casa_edad[$i] != null) ? $request->casa_edad[$i] : null;
                    $familiar_casa->casa_parentesco = ($request->casa_parentesco[$i] != null) ? $request->casa_parentesco[$i] : null;
                    $familiar_casa->casa_estudios = ($request->casa_estudios[$i] != null) ? $request->casa_estudios[$i] : null;

                    $familiar_casa->save();
                }
            }
            
            if (isset($request->instituto_familiar)) {
                for ($i = 0; $i < count($request->instituto_familiar); $i++) {
                    $familiar_instituto = new FamiliarInstituto();
                    $familiar_instituto->estudiante_id = session('estudiante')->id;
                    $familiar_instituto->instituto_familiar = ($request->instituto_familiar[$i] != null) ? $request->instituto_familiar[$i] : null;
                    $familiar_instituto->instituto_nivel = ($request->instituto_nivel[$i] != null) ? $request->instituto_nivel[$i] : null;
                    $familiar_instituto->instituto_nombre = ($request->instituto_nombre[$i] != null) ? $request->instituto_nombre[$i] : null;

                    $familiar_instituto->save();
                }
            }

            EstudioUno::where('estudiante_id', '=', session('estudiante')->id)
                ->update(['status_cita_id' => 3]);

            dd($estudio);

            return redirect('/tres');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
