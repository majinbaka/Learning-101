<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('code');
            $table->string('year', 4);
            $table->string('month', 2);
            $table->unsignedInteger('price');
            $table->unsignedInteger('metter_from');
            $table->unsignedInteger('metter_to');
            $table->tinyInteger('customer_type');
            $table->tinyInteger('process');
            $table->tinyInteger('type');

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
        Schema::dropIfExists('invoices');
    }
}
