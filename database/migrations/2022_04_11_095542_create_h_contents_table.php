<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcontent', function (Blueprint $table) {
            $table->id('id');
            $table->string('part1',255);
            $table->longText('desc1');
            $table->string('part2',255);
            $table->longText('desc2');
            $table->string('part3',255);
            $table->longText('desc3');
            $table->string('part4',255);
            $table->longText('desc4');
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
        Schema::dropIfExists('h_contents');
    }
}
