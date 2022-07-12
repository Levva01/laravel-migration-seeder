<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 30);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->dateTime('orario_partenza', 0);
            $table->dateTime('orario_arrivo', 0);
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->string('codice_treno', 8);
            $table->unsignedTinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

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
        Schema::dropIfExists('trains');
    }
}
