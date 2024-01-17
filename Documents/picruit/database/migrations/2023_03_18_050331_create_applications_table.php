<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('offer_free')->nullable();
            $table->string('privacy')->nullable();
            $table->string('canteach')->nullable();
            $table->string('subject')->nullable();
            $table->string('segment')->nullable();
            $table->string('frees')->nullable();
            $table->string('killvideo')->nullable();
            $table->string('experienceofforeign')->nullable();
            

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
        Schema::dropIfExists('applications');
    }
}
