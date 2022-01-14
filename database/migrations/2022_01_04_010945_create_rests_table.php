<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('work_id')->comment('勤怠ID');
            $table->foreign('work_id')->references('id')->on('works')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->time('start_time')->nullable()->comment('休憩開始時間');
            $table->time('finish_time')->nullable()->comment('休憩終了時間');
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
        Schema::dropIfExists('rests');
    }
}
