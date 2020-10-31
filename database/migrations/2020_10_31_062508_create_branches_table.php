<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address')->nulllable();
            $table->string('phone')->nulllable();
            $table->string('email')->nulllable();
            $table->string('facebook')->nulllable();
            $table->string('cover')->nulllable();
            $table->Datetime('open_time')->nulllable();
            $table->Datetime('close_time')->nulllable();
            $table->enum('week_end' , ['SUNDAY','MONDAY','TEUSDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'])->nulllable();
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('branches');
    }
}
