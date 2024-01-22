<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registrouser
 *
 * @property $id
 * @property $NamePerson
 * @property $LastNamePerson
 * @property $Country
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registrouser extends Model
{
    
    static $rules = [
		'NamePerson' => 'required',
		'LastNamePerson' => 'required',
		'Country' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NamePerson','LastNamePerson','Country'];



}
