<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioTres extends Model
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
    protected $table = 'estudio_tres';

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
        'hermanos',
        'hermanos_residen',
        'dependencia',
        'seguro',
        'seguro_especifique',
        'familia_trabajo',
        'familia_aporte',
        'ingreso_propio',
        'ingreso_padre',
        'ingreso_conyuge',
        'ingreso_hermanos',
        'ingreso_madre',
        'ingreso_otro',
        'gasto_total',
        'foraneo_total',
        'created_at',
        'updated_at',
    ];
}
