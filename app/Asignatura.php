<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','id_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
