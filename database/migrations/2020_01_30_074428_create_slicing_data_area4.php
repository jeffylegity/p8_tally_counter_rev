<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area4', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sl193_target')->nullable();
            $table->string('sl194_target')->nullable();
            $table->string('sl195_target')->nullable();
            $table->string('sl196_target')->nullable();
            $table->string('sl197_target')->nullable();
            $table->string('sl198_target')->nullable();
            $table->string('sl199_target')->nullable();
            $table->string('sl200_target')->nullable();
            $table->string('bc7_target')->nullable();
            $table->string('csl1_target')->nullable();

            $table->string('sl193_actual')->nullable();
            $table->string('sl194_actual')->nullable();
            $table->string('sl195_actual')->nullable();
            $table->string('sl196_actual')->nullable();
            $table->string('sl197_actual')->nullable();
            $table->string('sl198_actual')->nullable();
            $table->string('sl199_actual')->nullable();
            $table->string('sl200_actual')->nullable();
            $table->string('bc7_actual')->nullable();
            $table->string('csl1_actual')->nullable();

            $table->string('sl193_test_block')->nullable();
            $table->string('sl194_test_block')->nullable();
            $table->string('sl195_test_block')->nullable();
            $table->string('sl196_test_block')->nullable();
            $table->string('sl197_test_block')->nullable();
            $table->string('sl198_test_block')->nullable();
            $table->string('sl199_test_block')->nullable();
            $table->string('sl200_test_block')->nullable();
            $table->string('bc7_test_block')->nullable();
            $table->string('csl1_test_block')->nullable();

            $table->string('sl193_model')->nullable();
            $table->string('sl194_model')->nullable();
            $table->string('sl195_model')->nullable();
            $table->string('sl196_model')->nullable();
            $table->string('sl197_model')->nullable();
            $table->string('sl198_model')->nullable();
            $table->string('sl199_model')->nullable();
            $table->string('sl200_model')->nullable();
            $table->string('bc7_model')->nullable();
            $table->string('csl1_model')->nullable();
            
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
        Schema::dropIfExists('slicing_data_area4');
    }
}
