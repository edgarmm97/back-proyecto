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
        Schema::create('cat_serie_documental', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('area_id')->nullable();
            $table->string('codigo', 100);
            $table->string('serie_documental', 100);
            $table->tinyInteger('valoracion_a')->nullable()->default(1);
            $table->tinyInteger('valoracion_l')->nullable()->default(1);
            $table->tinyInteger('valoracion_f')->nullable()->default(1);
            $table->integer('vigencia_ac')->nullable()->default(0);
            $table->integer('vigencia_at')->nullable()->default(0);
            $table->text('observaciones')->nullable();
            $table->text('path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_serie_documental');
    }
};
