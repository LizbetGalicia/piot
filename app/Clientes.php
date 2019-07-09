<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table='Clientes';
    protected $primaryKey='id_cliente';
    protected $fillable=['nombre','ap','am','direccion','id_sexo'];

   /* function getSexos(){
        return $this->hasMany("App\Sexos",'id_sexo','id_sexo');
    }*/
}
