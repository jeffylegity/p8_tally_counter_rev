<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area2', function (Blueprint $table) {
         $table->bigIncrements('id');

         $table->string('sl156_target')->nullable();
         $table->string('sl161_target')->nullable();
         $table->string('sl162_target')->nullable();
         $table->string('sl163_target')->nullable();
         $table->string('sl164_target')->nullable();
         $table->string('sl171_target')->nullable();
         $table->string('sl172_target')->nullable();
         $table->string('sl179_target')->nullable();
         $table->string('sl180_target')->nullable();
         $table->string('sl181_target')->nullable();

         $table->string('sl156_actual')->nullable();
         $table->string('sl161_actual')->nullable();
         $table->string('sl162_actual')->nullable();
         $table->string('sl163_actual')->nullable();
         $table->string('sl164_actual')->nullable();
         $table->string('sl171_actual')->nullable();
         $table->string('sl172_actual')->nullable();
         $table->string('sl179_actual')->nullable();
         $table->string('sl180_actual')->nullable();
         $table->string('sl181_actual')->nullable();

         $table->string('sl156_test_block')->nullable();
         $table->string('sl161_test_block')->nullable();
         $table->string('sl162_test_block')->nullable();
         $table->string('sl163_test_block')->nullable();
         $table->string('sl164_test_block')->nullable();
         $table->string('sl171_test_block')->nullable();
         $table->string('sl172_test_block')->nullable();
         $table->string('sl179_test_block')->nullable();
         $table->string('sl180_test_block')->nullable();
         $table->string('sl181_test_block')->nullable();

         $table->string('sl156_model')->nullable();
         $table->string('sl161_model')->nullable();
         $table->string('sl162_model')->nullable();
         $table->string('sl163_model')->nullable();
         $table->string('sl164_model')->nullable();
         $table->string('sl171_model')->nullable();
         $table->string('sl172_model')->nullable();
         $table->string('sl179_model')->nullable();
         $table->string('sl180_model')->nullable();
         $table->string('sl181_model')->nullable();
         
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
        Schema::dropIfExists('slicing_data_area2');
    }
}
