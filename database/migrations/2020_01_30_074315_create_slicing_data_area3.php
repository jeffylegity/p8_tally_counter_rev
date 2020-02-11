<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingDataArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_data_area3', function (Blueprint $table) {
         $table->bigIncrements('id');
         
         $table->string('sl182_target')->nullable();
         $table->string('sl183_target')->nullable();
         $table->string('sl185_target')->nullable();
         $table->string('sl186_target')->nullable();
         $table->string('lap20_target')->nullable();
         $table->string('lap23_target')->nullable();
         $table->string('lap27_target')->nullable();
         $table->string('bc8_target')->nullable();
         $table->string('bc9_target')->nullable();
         $table->string('bc12_target')->nullable();

         $table->string('sl182_actual')->nullable();
         $table->string('sl183_actual')->nullable();
         $table->string('sl185_actual')->nullable();
         $table->string('sl186_actual')->nullable();
         $table->string('lap20_actual')->nullable();
         $table->string('lap23_actual')->nullable();
         $table->string('lap27_actual')->nullable();
         $table->string('bc8_actual')->nullable();
         $table->string('bc9_actual')->nullable();
         $table->string('bc12_actual')->nullable();

         $table->string('sl182_test_block')->nullable();
         $table->string('sl183_test_block')->nullable();
         $table->string('sl185_test_block')->nullable();
         $table->string('sl186_test_block')->nullable();
         $table->string('lap20_test_block')->nullable();
         $table->string('lap23_test_block')->nullable();
         $table->string('lap27_test_block')->nullable();
         $table->string('bc8_test_block')->nullable();
         $table->string('bc9_test_block')->nullable();
         $table->string('bc12_test_block')->nullable();

         $table->string('sl182_model')->nullable();
         $table->string('sl183_model')->nullable();
         $table->string('sl185_model')->nullable();
         $table->string('sl186_model')->nullable();
         $table->string('lap20_model')->nullable();
         $table->string('lap23_model')->nullable();
         $table->string('lap27_model')->nullable();
         $table->string('bc8_model')->nullable();
         $table->string('bc9_model')->nullable();
         $table->string('bc12_model')->nullable();
         
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
        Schema::dropIfExists('slicing_data_area3');
    }
}
