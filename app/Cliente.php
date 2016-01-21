<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = "reg_inscripciones";

    protected $primaryKey = 'id_registro';

    protected $fillable = [
        'evento',
        'nombre',
        'apellido',
        'mail',
        'telefono',
        'celular',
        'ciudad',
        'info',
        'comentarios',
        'fecha_ingreso'
    ];

    public $timestamps = false;
}