<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('judges_id');
            $table->foreign('judges_id')->references('id')->on('judges');
            $table->dateTime('period_from');//審査開始
            $table->dateTime('period_to');//審査期間
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
        Schema::dropIfExists('judgment');
    }
}
