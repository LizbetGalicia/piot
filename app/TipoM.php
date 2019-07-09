<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoM extends Model
{
    //
    protected $table = 'tipom';
    protected $primaryKey='id_tipo';
    protected $fillable=['descripcion'];


}
