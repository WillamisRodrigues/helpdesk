<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = ['titulo_chamado','observacao','id_categoria','id_escola','status'];

    protected $table ="chamados";
}
