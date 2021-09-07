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
            $table->integer('idPk')->unsigned();
            $table->integer('idType')->unsigned();
            $table->date('date_disposition')->nullable();
            $table->integer('number_tpp')->nullable();
            $table->date('date_tpp')->nullable();
            $table->date('date_send')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->string('status')->default('Selesai');
            $table->string('description')->nullable();
            $table->timestamps();
        });
        Schema::table('napis', function (Blueprint $table) {
            $table->foreign('idJail', 'idJail_fk_01')->references('id')->on('jails')->onDelete('cascade');
            $table->foreign('idPk', 'idPk_fk_02')->references('id')->on('pks')->onDelete('cascade');
            $table->foreign('idType', 'idType_fk_03')->references('id')->on('types')->onDelete('cascade');
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
