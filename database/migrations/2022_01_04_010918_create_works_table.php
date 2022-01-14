<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->time('start_time')->comment('勤務開始時間');
            $table->time('finish_time')->nullable()->comment('勤務終了時間');
            $table->date('date')->comment('日付');
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
        Schema::dropIfExists('works');
    }
}
