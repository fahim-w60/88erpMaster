<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccconfigHrmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accconfig_hrms', function (Blueprint $table) {
            $table->id();
            $table->integer('com_code')->nullable();
            $table->string('company', 20);
            $table->string('branch', 20);
            $table->string('grade', 20);
            $table->string('division', 20);
            $table->string('project', 20);
            $table->string('section', 20);
            $table->string('sub_section', 20);
            $table->string('location', 20);
            $table->string('floor', 20);
            $table->string('line', 20);
            $table->string('cost_center', 20);
            $table->string('machine', 20);
            $table->string('updated_by', 50);
            $table->dateTime('added_time');
            $table->string('gross', 5);
            $table->string('bank', 5);
            $table->string('ot_permission', 50);
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
        Schema::dropIfExists('accconfig_hrms');
    }
}
