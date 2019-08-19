<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['unidade','escola_parceira_id'];

    protected $primaryKey = 'idUnidade';
    protected $table ="unidade";
}
