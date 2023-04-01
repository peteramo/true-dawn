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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usr_user_name',12)->unique()->nullable();
            $table->string('usr_first_name')->nullable();
            $table->string('usr_last_name')->nullable();
            $table->string('usr_mobile_phone')->unique()->nullable();
            $table->string('usr_password_hash',2500)->nullable();
            $table->string('usr_email_address')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->tinyInteger('usr_is_superuser')->default(0);
            $table->tinyInteger('usr_is_admin')->default(0);
            $table->tinyInteger('usr_is_main_admin')->default(0);
            $table->tinyInteger('usr_is_active')->default(1);
            $table->tinyInteger('usr_is_hidden')->default(0);
            $table->timestamp('usr_last_login')->nullable();
            $table->string('usr_str',20)->unique()->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['usr_user_name','usr_mobile_phone']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
