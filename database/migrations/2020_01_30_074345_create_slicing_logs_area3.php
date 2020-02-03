<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlicingLogsArea3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slicing_logs_area3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->string('machine_no');
            $table->string('action');
            $table->string('type');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slicing_logs_area3');
    }
}
