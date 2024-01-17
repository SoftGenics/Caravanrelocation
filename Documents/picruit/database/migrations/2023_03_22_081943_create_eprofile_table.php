<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('cname');
            $table->string('cphone');
            $table->string('cemail');
            $table->string('name');
            $table->string('phone');
            $table->string('cem_no');
            $table->string('designation');
            $table->string('industry');
            $table->string('location');
            $table->string('description');
            $table->string('docs');
            $table->string('status');
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
        Schema::dropIfExists('eprofiles');
    }
}
