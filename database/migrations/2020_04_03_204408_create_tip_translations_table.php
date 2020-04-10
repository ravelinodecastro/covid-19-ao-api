<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tip_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tip_id')->unsigned();
            $table->string('locale')->index();

            $table->unique(['tip_id','locale']);

            $table->foreign('tip_id')->references('id')->on('tips')->onDelete('cascade');

            $table->longText('title');
            $table->longText('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tip_translations');
    }
}
