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
        Schema::create('cat_rol', function (Blueprint $table) {
            $table->comment('');
            $table->smallIncrements('id');
            $table->string('nombre_rol', 50);
            $table->tinyInteger('is_activo')->default(1);
            $table->unsignedSmallInteger('rol_id')->nullable()->index('rol_rol_id_foreign');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_rol');
    }
};
