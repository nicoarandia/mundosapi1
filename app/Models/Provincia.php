<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    /**Este campo es para el borrado logico, nose elimina se desactiva el campo. Si hace falta importar el modulo*/
    use SoftDeletes;
    /**Nombre de la tabla, tiene que estar igual que el archivo de migraciones */
    protected $table = 'provincias';
    /** Primer campo o atributo por defecto */
    protected $primaryKey = 'id';
    /**De que BD va a buscar los archivo se puede conectar varias */
    protected $connection = 'mysql';
    /**Que atributo va a tener el modelo ecepto el ID,replicarlo en archi migration */
    protected $fillable = [
        'nombre'
    ];
}
