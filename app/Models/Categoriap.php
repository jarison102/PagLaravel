<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoriap
 *
 * @property $id
 * @property $Categoria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoriap extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'CategoriaP';

    // Reglas de validación
    static $rules = [
        'Categoria' => 'required',
    ];

    // Número de elementos por página en la paginación
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Categoria'];
}
