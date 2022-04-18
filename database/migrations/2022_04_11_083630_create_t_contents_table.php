<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcontent', function (Blueprint $table) {
            $table->id();
            $table->string('carrousel1',255);
            $table->string('carrousel2',255);
            $table->string('carrousel3',255);
            $table->longtext('desc1');
            $table->longtext('desc2');
            $table->longtext('desc3');
            $table->string('type1',255);
            $table->string('type2',255);
            $table->string('typedesc1',255);
            $table->string('typedesc2',255);
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
        Schema::dropIfExists('t_contents');
    }
}
