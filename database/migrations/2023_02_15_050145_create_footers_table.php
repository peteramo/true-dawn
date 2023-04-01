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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('foo_name_1')->nullable();
            $table->string('foo_link_1')->nullable();
            $table->string('foo_name_2')->nullable();
            $table->string('foo_link_2')->nullable();
            $table->string('foo_name_3')->nullable();
            $table->string('foo_link_3')->nullable();
            $table->string('foo_name_4')->nullable();
            $table->string('foo_link_4')->nullable();
            $table->string('foo_name_5')->nullable();
            $table->string('foo_link_5')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
