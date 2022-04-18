<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('email',255);
            $table->string('phone',255);
            $table->string('address',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->string('zip',255);
            $table->longtext('question');
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
        Schema::dropIfExists('comments');
    }
}
