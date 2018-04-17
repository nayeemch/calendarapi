<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('holiday_name');
            $table->string('holiday_details');
            $table->string('holiday_img_url')->default('goo.gl/xR4pTJ');
            $table->integer('holiday_date')->default('1');
            $table->integer('months_id')->unsigned()->default('1');
            $table->foreign('months_id')
                   ->references('id')
                   ->on('months')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->integer('calendar_type_id')->unsigned()->default('1');
            $table->foreign('calendar_type_id')
                   ->references('id')
                   ->on('months');
            $table->integer('holiday_year')->default('2018');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
