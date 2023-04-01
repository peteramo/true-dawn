<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hom_page_id');
            $table->string('hom_hero_background_uri')->nullable();
            $table->string('hom_hero_header')->nullable();
            $table->string('hom_hero_paragraph')->nullable();
            $table->string('hom_hero_button_name')->nullable();
            $table->string('hom_hero_button_action_uri',2500)->nullable();
            $table->timestamps();

            $table->foreign('hom_page_id')->on('pages')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepages');
    }
};
