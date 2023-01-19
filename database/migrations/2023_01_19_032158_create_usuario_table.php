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
        Schema::create('rol', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nombre_rol', 50);
            $table->tinyInteger('is_activo')->default(1);
            $table->unsignedSmallInteger('rol_id')->nullable();
            $table->timestamps();
            $table->foreign('rol_id')->references('id')->on('rol')
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
        Schema::dropIfExists('rol');
    }
};
