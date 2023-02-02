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
        Schema::create('cat_formatos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->text('nombre_formato');
            $table->integer('vigencia')->default(1);
            $table->string('tecnica_selecion', 100);
            $table->text('observaciones')->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_formatos');
    }
};
