<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioUno extends Model
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
    protected $table = 'estudio_uno';

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
        'estado_id',
        'municipio_id',
        'poblacion_id',
        'exterior',
        'interior',
        'cp',
        'telefono',
        'celular',
        'email',
        'beca',
        'beca_tipo',
        'beca_cantidad',
        'beca_insituto',
        'dependenca',
        'dependencia_parentesco',
        'residencia',
        'residencia_otro',
        'trabajo',
        'trabajo_nombre',
        'trabajo_puesto',
        'trabajo_tiempo',
        'trabajo_telefono',
        'trabajo_domicilio',
        'created_at',
        'updated_at'
    ];
}
