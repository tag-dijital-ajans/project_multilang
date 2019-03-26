<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OlusturTabloBlogcategoryTranslation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcategory_translation', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('blogcategory_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();

            $table->string('slug')->nullable();

            $table->unique(['blogcategory_id','locale']);
            $table->foreign('blogcategory_id')->references('id')->on('blogcategory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcategory_translation');
    }
}
