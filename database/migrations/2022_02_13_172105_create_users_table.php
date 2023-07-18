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
            $table->string('username', 20);
            $table->string('mail', 255)->unique();
            $table->string('password', 60);
            $table->string('2FA_token', 500)->nullable();
            $table->longText('backup_codes')->nullable();
            $table->boolean('2FA_active')->default(false);
            $table->boolean('admin')->default(false);
            $table->string('connection_token', 500)->nullable();
            $table->string('last_ip', 257);
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
        Schema::dropIfExists('users');
    }
};
