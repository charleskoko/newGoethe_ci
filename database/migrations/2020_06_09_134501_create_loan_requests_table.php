<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->date('start');
            $table->date('end');
            $table->string('status');
            $table->string('email');
            $table->string('filmTitle');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mobile')->nullable();
            $table->smallInteger('numberOfCopies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_requests');
    }
}
