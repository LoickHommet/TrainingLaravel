<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('training')->index();
            $table->unsignedBigInteger('category')->index();
            $table->foreign('training')->references('id')->on('training');
            $table->foreign('category')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_category');
    }
}
