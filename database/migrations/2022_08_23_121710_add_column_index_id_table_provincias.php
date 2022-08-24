<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**AGREGAR UNA COLUMNA A LA TABLA PROVINCIAS */
    public function up()
    {
        Schema::table('provincias', function (Blueprint $table) {
            $table->string('index_id')->nullable();
        });
    }

    
};
