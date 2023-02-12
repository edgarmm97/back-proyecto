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
        Schema::create('tableareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->string('codigo')->unique();
            $table->string('serie');
            $table->boolean('val_a')->default(false);
            $table->boolean('val_l')->default(false);
            $table->boolean('val_f')->default(false);
            $table->string('vig_ac');
            $table->string('vig_at');
            $table->string('total');
            $table->boolean('eliminacion')->default(false);
            $table->boolean('conservacion')->default(false);
            $table->boolean('muestreo')->default(false);
            $table->longText('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tableareas');
    }
};
