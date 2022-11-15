<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_main_user")->constrained();
            $table->string("titolo_di_studio");
            $table->date("data_inizio");
            $table->date("data_fine");
            $table->string("nome_istituto");
            $table->string("competenze");
            $table->string("titolo_di_studio");
            $table->string("immagine_certificazioni");
            
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
        Schema::dropIfExists('educations');
    }
}
