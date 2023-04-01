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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('con_page_id');
            $table->string('con_email')->nullable();
            $table->string('con_email2')->nullable();
            $table->string('con_phone')->nullable();
            $table->string('con_phone2')->nullable();
            $table->string('con_mobile')->nullable();
            $table->string('con_fax')->nullable();
            $table->string('con_address')->nullable();
            $table->string('con_postcode')->nullable();
            $table->string('con_twitter')->nullable();
            $table->string('con_facebook')->nullable();
            $table->string('con_instagram')->nullable();
            $table->string('con_skype')->nullable();
            $table->string('con_linkedin')->nullable();
            $table->timestamps();

            $table->foreign('con_page_id')->on('pages')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
