<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no');
            $table->string('branch');
            $table->string('branch_no');
            $table->string('center');
            $table->string('group_no');
            $table->string('borrower_no');
            $table->string('full_name');
            $table->string('nic');
            $table->string('birthday');
            $table->string('address');
            $table->string('lp_no')->nullable();
            $table->string('mobile_no');
            $table->string('email')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('requested_amount');
            $table->string('duration_weeks');
            $table->string('loan_stage')->nullable();
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
        Schema::dropIfExists('borrowers');
    }
}
