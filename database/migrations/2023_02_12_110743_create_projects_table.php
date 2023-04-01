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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pro_page_id');
            $table->string('pro_name');
            $table->string('pro_image');
            $table->string('pro_duration')->nullable();
            $table->string('pro_director')->nullable();
            $table->string('pro_writer')->nullable();
            $table->string('pro_producer')->nullable();
            $table->string('pro_details')->nullable();
            $table->timestamps();

            $table->foreign('pro_page_id')->on('pages')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
