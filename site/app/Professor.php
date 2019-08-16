<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome','email','senha','nivel','cod_unidade', 'id_turma_unifp'];

    protected $table ="clientes";
}
