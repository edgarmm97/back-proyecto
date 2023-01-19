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
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nombre_rol', 50);
            $table->tinyInteger('is_activo')->default(1);
            $table->unsignedSmallInteger('usuario_id')->nullable();
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuario')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
