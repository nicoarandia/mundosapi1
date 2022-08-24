<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

    protected $table = 'personas';

    protected $primaryKey = 'id';

    protected $connection = 'mysql';

    protected $fillable = [
        'nombre',
        'dni',
        /**Para vincular con la tabla barrio */
        'barrio_id',
        'email',
        'legajo',
        'edad',
    ];
}
