<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robots', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->increments('id');
            $table->integer('user_id')->unsigned(); //->nullable()
            $table->string('modelo');
            $table->string('host');
            //$table->string("motores");

            $table->timestamps();
        });

        Schema::table('robots', function (Blueprint $table) {
            //Foreign key
            $table->foreign('user_id')->references('id')->on('users'); //->onDelete('set null'); //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('robots');
    }
}
