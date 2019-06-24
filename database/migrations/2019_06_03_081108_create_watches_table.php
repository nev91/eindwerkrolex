<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('photo_id')->index()->unsigned()->nullable();
            $table->string('name');
            $table->text('slogan')->nullable();
            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->text('description')->nullable();
            $table->text('minidescription')->nullable();
            $table->string('fullimage')->nullable();
            $table->string('detailtitel')->nullable();
            $table->string('detailimage')->nullable();
            $table->text('detailtext')->nullable();
            $table->string('videolink')->nullable();
            $table->string('fluidimage')->nullable();
            $table->integer('instock')->unsigned()->default('0');
            $table->string('modelkast')->nullable();
            $table->string('oystercontructie')->nullable();
            $table->string('diameter')->nullable();
            $table->string('materiaal')->nullable();
            $table->string('bezel')->nullable();
            $table->string('opwindkroon')->nullable();
            $table->string('horlogeglas')->nullable();
            $table->string('waterdichtheid')->nullable();
            $table->string('uurwerk')->nullable();
            $table->string('kaliber')->nullable();
            $table->string('precisie')->nullable();
            $table->text('functies')->nullable();
            $table->string('oscillator')->nullable();
            $table->string('opwinden')->nullable();
            $table->string('gangreserve')->nullable();
            $table->string('horlogeband')->nullable();
            $table->string('materiaalhorlogeband')->nullable();
            $table->string('sluiting')->nullable();
            $table->string('wijzerplaat')->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('watches');
    }
}
