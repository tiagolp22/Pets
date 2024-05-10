<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionNomToServicesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->float("prix")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {

            $table->float("prix")->nullable();
        });
    }
}
