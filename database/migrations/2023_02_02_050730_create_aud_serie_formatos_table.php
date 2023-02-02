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
        Schema::create('aud_serie_formatos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('serie_documental_id')->index('serie_documental_id');
            $table->integer('formato_id')->index('formato_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aud_serie_formatos');
    }
};
