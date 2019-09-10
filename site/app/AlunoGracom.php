<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoGracom extends Model
{
    protected $fillable = ['nome','email','senha','nivel','status','cod_unidade','matricula','id_turma_unifp'];

    protected $primaryKey = 'id_cliente';
    protected $table ="clientes";
}
