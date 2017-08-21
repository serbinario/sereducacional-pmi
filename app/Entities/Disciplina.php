<?php

namespace SerEducacional\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Disciplina extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'edu_disciplinas';

    protected $fillable = [
        'nome',
        'codigo',
        'carga_horaria'
    ];

}
