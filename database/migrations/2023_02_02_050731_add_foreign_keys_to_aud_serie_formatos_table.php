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
        Schema::table('aud_serie_formatos', function (Blueprint $table) {
            $table->foreign(['serie_documental_id'], 'aud_serie_formatos_ibfk_1')->references(['id'])->on('cat_serie_documental')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['formato_id'], 'aud_serie_formatos_ibfk_2')->references(['id'])->on('cat_formatos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aud_serie_formatos', function (Blueprint $table) {
            $table->dropForeign('aud_serie_formatos_ibfk_1');
            $table->dropForeign('aud_serie_formatos_ibfk_2');
        });
    }
};
