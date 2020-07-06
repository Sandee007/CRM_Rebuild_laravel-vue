<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('center_name');
            $table->string('center_no');
            $table->string('branch_no');
            $table->string('center_address')->nullable();
            $table->string('center_province')->nullable();
            $table->string('center_city')->nullable();
            $table->string('center_postal')->nullable();
            $table->string('center_mobile')->nullable();
            $table->string('center_land')->nullable();
            $table->string('center_email')->nullable();
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
        Schema::dropIfExists('centers');
    }
}
