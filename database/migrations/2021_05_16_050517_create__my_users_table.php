<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_my_users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("address");
            $table->string("Job");
            $table->string("gender");
            $table->string("contry");
            $table->string("language");
            $table->date("date");
            $table->mediumText("image")->nullable();
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
        Schema::dropIfExists('_my_users');
    }
}
