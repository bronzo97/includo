<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesJobOffersMainUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_job_offers_main_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("courses_id")->constrained();
            $table->foreignId("job_offers_id")->constrained();
            $table->foreignId("main_users_id")->constrained();

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
        Schema::dropIfExists('courses_job_offers_main_users');
    }
}
