<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registromovie
 *
 * @property $id
 * @property $NameMovie
 * @property $FechaMovies
 * @property $Country
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registromovie extends Model
{
    
    static $rules = [
		'NameMovie' => 'required',
		'FechaMovies' => 'required',
		'Country' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NameMovie','FechaMovies','Country'];



}
