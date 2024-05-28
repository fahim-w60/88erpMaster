<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportReceiveVesselInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_receive_vessel_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('_vessel_no')->nullable();
            $table->string('_vessel_res_person')->nullable();
            $table->string('_vessel_res_mobile')->nullable();
            $table->longText('_extra_instruction')->nullable();
            $table->double('_capacity')->default(0);
            $table->integer('_purchase_no')->nullable();
            $table->tinyInteger('_status')->default(0);
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
        Schema::dropIfExists('import_receive_vessel_infos');
    }
}
