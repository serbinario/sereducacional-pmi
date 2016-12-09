<?php

namespace SerEducacional\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Bairro extends Model implements Transformable
{
    use TransformableTrait;

    protected $table    = 'bairros';

    protected $fillable = [
        'nome',
        'cidades_id'
    ];

    /**
     * @return mixed
     */
    public function endereco()
    {
        return $this->hasMany(Endereco::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
