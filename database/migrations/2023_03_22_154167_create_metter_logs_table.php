<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetterLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metter_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metter_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedInteger('current_metter');
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
        Schema::dropIfExists('metter_logs');
    }
}
