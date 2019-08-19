<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['id_unidade','nome_unidade','escola_parceira_id'];

    protected $primaryKey = 'id_unidade';
    protected $table ="unidades";
}
