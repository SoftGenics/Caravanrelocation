<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolveQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solve_questions', function (Blueprint $table) {
            $table->id();
            $table->string('sname')->nullable();
            $table->string('user_id')->nullable();
            
             $table->string('title')->nullable();
            $table->string('mediafile')->nullable();
            $table->string('aboutProblem')->nullable();
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
        Schema::dropIfExists('solve_questions');
    }
}
