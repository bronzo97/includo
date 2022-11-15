<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_users', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("cognome");
            $table->date("data_di_nascita");
            $table->string("luogo_di_nascita");
            $table->string("indirizzo_di_residenza");
            $table->string("città");
            $table->string("provincia");
            $table->string("lingue");
            $table->string("immagine");
            $table->string("email");
            $table->string("password");
            $table->string("username");
            $table->string("role", 10);
            $table->string("slug")->unique();
            
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
        Schema::dropIfExists('main_users');
    }
}
