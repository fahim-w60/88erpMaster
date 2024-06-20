<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadistrict', function (Blueprint $table) {
            $table->id();
            $table->string('district', 50)->nullable();
            $table->string('bibhag', 50);
            $table->decimal('area', 20, 2);
            $table->string('telcode', 50);
            $table->string('zipcode', 10);
            $table->string('remarks', 250)->nullable();
            $table->string('extradesc', 100)->nullable();
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
        Schema::dropIfExists('cadistrict');
    }
}
