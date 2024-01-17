<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finels', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('provide_ref_student')->nullable();
            $table->string('any_other_details')->nullable();
            $table->string('done_assigment')->nullable();
            $table->string('verify_certificate')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_proof')->nullable();
            $table->string('highest_qualification_proof')->nullable();
            $table->string('photo')->nullable();
            $table->string('foreign_experience')->nullable();
            $table->string('t&C_pdf')->nullable();
            $table->string('reg_fee')->nullable();
            $table->string('pincode')->nullable();
            $table->string('area')->nullable();
            
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
        Schema::dropIfExists('finels');
    }
}
