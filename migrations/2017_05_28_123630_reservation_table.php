<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('roomtype_name');
            $table->string('name');
            $table->string('last_name');
            $table->string('phone');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('quota_room');
            $table->string('adult');
            $table->string('child');
            $table->string('fee');
            $table->string('nights');
            $table->string('payment_status');
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            //
        });
    }
}
