<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('pack_name', 30);
            $table->tinyInteger('destinations_qnt');
            $table->string('start_point', 50);
            $table->smallInteger('price');
            $table->timestamps();
        });
    }

    /* 
    nome pacchetto
    quantita destinazioni
    punto di partenza
    prezzo
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packs');
    }
}