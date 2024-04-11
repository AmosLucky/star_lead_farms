<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->float('balance')->default(0.0);
            $table->string('referral_balance')->default(0.0);
            $table->float('points')->default(0.0);
            $table->string('referrer');
            $table->string('status')->default('active');
            $table->string('access')->default('user');
            $table->string('type')->default('user');
            $table->integer('level')->default(1);
            $table->integer('package_id')->default(0);
            $table->boolean('paid')->default(false);
            $table->string('state')->default('Enugu');
            $table->string('uid')->default("");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('bank')->default('');;
            $table->string('account_number')->default('');;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
