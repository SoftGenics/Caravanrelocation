<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srequirements', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('s_name');
            $table->string('date');
            $table->string('rate');
            $table->string('stime');
            $table->string('etime');
            $table->string('notes');
            $table->string('pincode');
            $table->string('class');
            $table->string('city');
            $table->string('subject');
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
        Schema::dropIfExists('srequirements');
    }
}
