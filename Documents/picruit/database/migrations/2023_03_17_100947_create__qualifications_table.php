<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('Stream')->nullable();
            $table->string('University')->nullable();
            $table->string('Exprienceoffline')->nullable();
            $table->string('Exprienceonline')->nullable();
            $table->string('Specialachievements')->nullable();
            $table->string('Anyotherdetails')->nullable();
            $table->string('AboutProject')->nullable();
            $table->string('document')->nullable();

            
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
        Schema::dropIfExists('_qualifications');
    }
}
