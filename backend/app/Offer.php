<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'categoria', 'titulo', 'descricao', 'valor', 'quantidade', 'imagem', 'loja'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}