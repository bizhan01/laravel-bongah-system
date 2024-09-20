<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('date');
            $table->integer('customer_id');
            $table->string('file_id');
            $table->string('contract_type');
            $table->bigInteger('price')->default(0);
            $table->bigInteger('advance_paid')->default(0);
            $table->bigInteger('rent')->default(0);
            $table->string('contract_code')->unique();
            $table->string('startDate');
            $table->string('endDate');
            $table->string('commission');
            $table->string('contract_scan');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('contracts');
    }
}
