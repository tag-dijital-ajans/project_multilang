<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OlusturTabloNavmenuTranslation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navmenu_translation', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('navmenu_id');
            $table->string('locale')->index();

            $table->string('title')->nullable();


            $table->unique(['navmenu_id','locale']);
            $table->foreign('navmenu_id')->references('id')->on('navmenu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navmenu_translation');
    }
}
