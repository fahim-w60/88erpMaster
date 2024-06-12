<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccconfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accconfigs', function (Blueprint $table) {
            $table->id();
            $table->integer('com_code')->default(0);
            $table->tinyInteger('amtshow')->default(0);
            $table->tinyInteger('project')->default(0);
            $table->tinyInteger('division')->default(0);
            $table->tinyInteger('section')->default(0);
            $table->tinyInteger('customer')->default(0);
            $table->tinyInteger('supplier')->default(0);
            $table->tinyInteger('employee')->default(0);
            $table->integer('s_basic')->default(0);
            $table->integer('gross')->default(0);
            $table->integer('pf')->default(0);
            $table->integer('hrent')->default(0);
            $table->integer('s_absent')->default(0);
            $table->integer('bonuspay')->default(0);
            $table->integer('bonusdepend')->default(0);
            $table->tinyInteger('bonuspercent')->default(0);
            $table->tinyInteger('appincrement')->default(0);
            $table->tinyInteger('ensms')->default(0);
            $table->tinyInteger('enmail')->default(0);
            $table->tinyInteger('voucherformat')->default(0);
            $table->tinyInteger('ctrl_cs')->default(0);
            $table->tinyInteger('printlogo')->default(0);
            $table->tinyInteger('projecthead')->default(0);
            $table->tinyInteger('divisionhead')->default(0);
            $table->tinyInteger('sectionhead')->default(0);
            $table->tinyInteger('chqnodetail')->default(0);
            $table->tinyInteger('rptname')->default(0);
            $table->tinyInteger('showbalance')->default(0);
            $table->tinyInteger('cashbalchk')->default(0);
            $table->tinyInteger('dolaramt')->default(0);
            $table->tinyInteger('extradesc')->default(0);
            $table->tinyInteger('printpost')->default(0);
            $table->tinyInteger('dup_acc')->default(0);
            $table->tinyInteger('xbackup')->default(0);
            $table->integer('bonusactiveduration')->default(0);
            $table->integer('orsoactiveduration')->default(0);
            $table->tinyInteger('alcode')->default(0);
            $table->tinyInteger('poreport')->default(0);
            $table->tinyInteger('lvbalance')->default(0);
            $table->boolean('pfactive')->default(0);
            $table->tinyInteger('vouchersms')->default(0);
            $table->tinyInteger('vouchersmslink')->default(0);
            $table->tinyInteger('vouchersmsmobile')->default(0);
            $table->tinyInteger('voucherattach')->default(0);
            $table->tinyInteger('autoallocation')->default(0);
            $table->tinyInteger('paymentdate')->default(0);
            $table->boolean('cbc')->default(0);
            $table->tinyInteger('cbchead')->default(0);
            $table->tinyInteger('vouchersms_sup')->default(0);
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
        Schema::dropIfExists('accconfigs');
    }
}
