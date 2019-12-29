<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sl1_actual')->nullable();
            $table->string('sl1_target')->nullable();
            $table->string('sl1_test_block')->nullable();
            $table->string('sl2_actual')->nullable();
            $table->string('sl2_target')->nullable();
            $table->string('sl2_test_block')->nullable();
            $table->string('sl3_actual')->nullable();
            $table->string('sl3_target')->nullable();
            $table->string('sl3_test_block')->nullable();
            $table->string('sl4_actual')->nullable();
            $table->string('sl4_target')->nullable();
            $table->string('sl4_test_block')->nullable();
            $table->string('sl5_actual')->nullable();
            $table->string('sl5_target')->nullable();
            $table->string('sl5_test_block')->nullable();
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
        Schema::dropIfExists('slicing_data');
    }
}
