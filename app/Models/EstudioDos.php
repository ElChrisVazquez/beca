<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioDos extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estudio_dos';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estudiante_id',
        'padres',
        'padres_edad_padre',
        'padres_edad_madre',
        'padres_juntos',
        'padres_padre_civil',
        'padres_madre_civil',
        'padres_padre_escolaridad',
        'padres_madre_escolaridad',
        'padre_nombre',
        'padre_trabajo',
        'padre_cargo',
        'padre_tiempo',
        'padre_domicilio',
        'padre_telefono',
        'madre_nombre',
        'madre_trabajo',
        'madre_tiempo',
        'madre_cargo',
        'madre_domicilio',
        'madre_telefono',
    ];
}
