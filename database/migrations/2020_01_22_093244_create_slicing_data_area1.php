<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area1', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl166_target')->nullable();
            $table->string('sl167_target')->nullable();
            $table->string('sl168_target')->nullable();
            $table->string('sl169_target')->nullable();
            $table->string('sl170_target')->nullable();

            $table->string('sl166_actual')->nullable();
            $table->string('sl167_actual')->nullable();
            $table->string('sl168_actual')->nullable();
            $table->string('sl169_actual')->nullable();
            $table->string('sl170_actual')->nullable();

            $table->string('sl166_test_block')->nullable();
            $table->string('sl167_test_block')->nullable();
            $table->string('sl168_test_block')->nullable();
            $table->string('sl169_test_block')->nullable();
            $table->string('sl170_test_block')->nullable();

            $table->string('sl166_model')->nullable();
            $table->string('sl167_model')->nullable();
            $table->string('sl168_model')->nullable();
            $table->string('sl169_model')->nullable();
            $table->string('sl170_model')->nullable();
            
            $table->dateTime('date_generated')->nullable();
            $table->string('shift')->nullable();
            $table->boolean('data_stored')->nullable();
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
        Schema::dropIfExists('slicing_data_area1');
    }
}
