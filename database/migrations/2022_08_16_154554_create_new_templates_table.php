<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_templates', function (Blueprint $table) {
            $table->id('new_template_id');
            $table->text('icon')->nullable();
            $table->text('optional_icon')->nullable();
            $table->text('title');
            $table->text('desc');
            $table->json('title_page');
            $table->text('title_page_title')->nullable();
            $table->json('pages');
            $table->json('common_multiple_choise_options')->nullable();
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('new_templates');
    }
}
