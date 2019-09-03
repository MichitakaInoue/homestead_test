<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {//審査テーブル
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('number');
            $table->integer('password');
            $table->unsignedBigInteger('group_id');//必要?
            $table->foreign('group_id')->references('id')->on('group');
            $table->softDeletes();
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
        Schema::dropIfExists('judges');
    }
}
