<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csvData', function ($table) {
            $table->timestamp("time");
            $table->double("lev");
            $table->double("hs");
            $table->double("hx");
            $table->double("tp");
            $table->double("tm01");
            $table->double("tm02");
            $table->double("dp");
            $table->double("dpm");
            $table->double("hs_sw1");
            $table->double("hs_sw8");
            $table->double("tp_sw1");
            $table->double("tp_sw8");
            $table->double("dpm_sw8");
            $table->double("dpm_sw1");
            $table->double("hs_sea8");
            $table->double("hs_sea");
            $table->double("tp_sea8");
            $table->double("tp_sea");
            $table->double("tm_sea");
            $table->double("dpm_sea8");
            $table->double("dpm_sea");
            $table->double("hs_ig");
            $table->double("hs_fig");
            $table->double("wsp");
            $table->double("gst");
            $table->double("wd");
            $table->double("wsp100");
            $table->double("wsp50");
            $table->double("wsp80");
            $table->double("precip");
            $table->double("tmp");
            $table->double("rh");
            $table->double("vis");
            $table->double("cld");
            $table->double("cb");
            $table->double("csp0");
            $table->double("cd0");
            $table->double("ss");
            $table->double("sst");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csv_data');
    }
}
