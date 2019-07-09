<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    protected $table='sensor';
    protected $primaryKey='id_sensor';
    protected $fillable=['n_sensor','nombre'];
}
