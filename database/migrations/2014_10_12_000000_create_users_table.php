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
            $table->string('name');
            $table->string('npk');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('level');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'nama' => 'Administrator',
            'npk' => '0001'
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'nama_user' => 'User',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'level' => 'user',
        ]);
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
