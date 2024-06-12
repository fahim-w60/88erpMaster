<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayatdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payatds', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing primary key
            $table->string('com_code',15)->nullable();
            $table->integer('year')->nullable();
            $table->integer('period')->nullable();
            $table->integer('day')->nullable();
            $table->date('entrydate')->nullable();
            $table->string('shift',10)->nullable();
            $table->string('emp_id',20)->nullable();
            $table->time('intime')->nullable();
            $table->time('outtime')->nullable();
            $table->time('lotime')->nullable();
            $table->time('litime')->nullable();
            $table->string('remarks',150)->nullable();
            $table->string('timediff',8)->nullable();
            $table->string('atdstat',50)->nullable();
            $table->string('flag',20)->nullable();
            $table->string('entered_by',50)->nullable();
            $table->string('last_update_by',50)->nullable();
            $table->timestamp('add_time')->nullable();
            $table->timestamp('update_time')->nullable();
            $table->decimal('othouractual', 8, 2)->nullable();
            $table->decimal('othourbuyer', 8, 2)->nullable();
            $table->decimal('othourbalance', 8, 2)->nullable();
            $table->string('manual_remark',150)->nullable();
            $table->string('otrule',50)->nullable();
            $table->string('ot_type',50)->nullable();
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
        Schema::dropIfExists('payatds');
    }
}
