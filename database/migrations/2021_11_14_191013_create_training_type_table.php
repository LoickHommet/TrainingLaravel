<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('training')->index();
            $table->unsignedBigInteger('type')->index();
            $table->foreign('training')->references('id')->on('training');
            $table->foreign('type')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_type');
    }
}
