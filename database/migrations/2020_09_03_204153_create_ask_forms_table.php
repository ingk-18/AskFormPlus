<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //氏名
            $table->string('your_name', 20);
            //マイナンバー　12桁
            $table->bigInteger('my_number',);
            //パスワード4桁
            $table->unsignedInteger('password');
            //生年月日
            $table->date('birthday',);
            //住所
            $table->string('address', 100);
            //性別
            $table->boolean('gender');
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
        Schema::dropIfExists('ask_forms');
    }
}
