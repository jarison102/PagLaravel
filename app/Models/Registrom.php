<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registrom
 *
 * @property $id
 * @property $Nombre
 * @property $Cilindraje
 * @property $Peso
 * @property $Potencia_máxima
 * @property $Tipo_de_motor
 * @property $Arranque
 * @property $Sistema_de_reducción_primaria
 * @property $Luz_principal
 * @property $Sistema_de_alimentación
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registrom extends Model
{
        // Nombre de la tabla en la base de datos
        protected $table = 'registrom';

    static $rules = [
		'Nombre' => 'required',
		'Cilindraje' => 'required',
		'Peso' => 'required',
		'Potencia_máxima' => 'required',
		'Tipo_de_motor' => 'required',
		'Arranque' => 'required',
		'Sistema_de_reducción_primaria' => 'required',
		'Luz_principal' => 'required',
		'Sistema_de_alimentación' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Cilindraje','Peso','Potencia_máxima','Tipo_de_motor','Arranque','Sistema_de_reducción_primaria','Luz_principal','Sistema_de_alimentación'];



}
