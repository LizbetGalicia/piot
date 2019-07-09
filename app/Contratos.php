<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    //
    protected $table='Contratos';
    protected $primaryKey='id_contrato';
    protected $fillable=['nservicio','costo','id_cliente','id_sensor'];

    function getClientes()
    {
        return $this->hasMany("App\Clientes",'id_cliente','id_cliente');

    }

    function getSensor()
    {
        return $this->hasMany("App\Sensores",'id_sensor','id_sensor');

    }
}
