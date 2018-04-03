<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountinfo', function (Blueprint $table) {
            $table->integer('userid');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->enum('gender', ['male', 'female']);
            $table->date('birthday');
            $table->string('mobilenumber');
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
        Schema::dropIfExists('accountinfo');
    }
}
