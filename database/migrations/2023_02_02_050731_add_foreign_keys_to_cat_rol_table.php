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
        Schema::table('cat_rol', function (Blueprint $table) {
            $table->foreign(['rol_id'], 'rol_rol_id_foreign')->references(['id'])->on('cat_rol')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_rol', function (Blueprint $table) {
            $table->dropForeign('rol_rol_id_foreign');
        });
    }
};
