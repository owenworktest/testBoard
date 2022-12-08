<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("desc");
            // $table->string("account");
            // $table->string("name");
            // $table->string("nickname");
            // $table->dateTime("birthday");
            // $table->string("phone");
            // $table->string("email");
            // $table->dateTime("last_login_time");
            // $table->integer("status");
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
        Schema::dropIfExists('boards');
    }
}
