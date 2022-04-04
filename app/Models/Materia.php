<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Años
 * @property $Materia
 * @property $centro
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Años' => 'required',
		'Materia' => 'required',
		'centro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Años','Materia','centro'];



}
