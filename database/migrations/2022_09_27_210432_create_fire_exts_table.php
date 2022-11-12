<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireExtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_exts', function (Blueprint $table) {
            $table->id('fire_ext_id');
            $table->string('project_code');
            $table->bigInteger('number');
            $table->string('project_name');
            $table->string('fire_extinguisher_type');
            $table->bigInteger('weight');
            $table->date('last_inspection');
            $table->date('exp_date');
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
        Schema::dropIfExists('fire_exts');
    }
}
