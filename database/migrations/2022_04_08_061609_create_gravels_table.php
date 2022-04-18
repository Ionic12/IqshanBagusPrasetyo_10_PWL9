<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gravel', function (Blueprint $table) {
            $table->id('id');
            $table->string('models',10)->index();
            $table->string('type',255);
            $table->string('wheels',255);
            $table->string('chain',255);
            $table->string('shifters',255);
            $table->string('handlebar',255);
            $table->string('caliper',255);
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
        Schema::dropIfExists('gravels');
    }
}
