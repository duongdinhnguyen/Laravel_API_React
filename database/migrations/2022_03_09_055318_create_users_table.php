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
            $table->increments('id');
            $table->string('student_id')->unique()->nullable();
            $table->string('name');
            $table->string('email');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('phone')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->rememberToken();
            $table->string('reset_password_token')->nullable();
            $table->timestamp('time_request')->nullable();
            $table->integer('active_flag')->default('1');
            $table->integer('rule')->default('0');
            // $table->foreignId('current_team_id')->nullable();
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
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
