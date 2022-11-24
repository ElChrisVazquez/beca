<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogsController extends Controller
{
    /**
     * Devuelve la lista completla de los estados
     */
    public function getEntidades()
    {
        $entidades = DB::table('c_entidad')->get();
        return response($entidades);
    }

    /**
     * @param string cve_ent pertenece al ID de c_entidad
     * @return response Lista filtrada por entidad
     */
    public function getMunicipios(Request $request)
    {
        $municipios = DB::table('c_mun')
            ->where('cve_ent', '=', $request->cve_ent)
            ->orderBy('nom_mun', 'ASC')
            ->get();
        return response($municipios);
    }

    /**
     * @param string cve_mun ,un pertenece al ID de c_municipios
     * @return response Lista filtrada por municipio
     */
    public function getLocalidades(Request $request)
    {
        $localidades = DB::table('c_loc')
            ->where('cve_mun_conca', '=', $request->cve_mun)
            ->orderBy('nom_loc', 'ASC')
            ->get();
        return response($localidades);
    }

    /**
     * @return response colonia por municipio
     */
    public function getColonias(Request $request)
    {
        $colonias = DB::table('c_colonias')
            ->where('c_mnpio', '=', $request->c_mnpio)
            ->orderBy('d_asenta', 'ASC')
            ->get();
        return response($colonias);
    }

    /**
     * @return response cp por colonia
     */
    public function getCps(Request $request)
    {
        $cps = DB::table('c_colonias')
            ->where('id', '=', $request->id)
            ->get();

        return response($cps);
    }

    /**
     * @return response escolaridades
     */
    public function getEscolaridades()
    {
        $escolaridades = DB::table('c_escolaridades')
            ->get();

        return response($escolaridades);
    }

    /**
     * @return response parentescos
     */
    public function getParentescos()
    {
        $parentescos = DB::table('c_parentescos')
            ->get();

        return response($parentescos);
    }
}
