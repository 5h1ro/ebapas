<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('napis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('idJail')->unsigned();
            $table->string('case');
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('napis', function (Blueprint $table) {
            $table->foreign('idJail', 'idJail_fk_01')->references('id')->on('jails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('napis');
    }
}
