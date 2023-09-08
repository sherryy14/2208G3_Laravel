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
        Schema::create('registration', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('name',20);
            $table->string('email',50)->unique();
            $table->string('city',20)->nullable();
            $table->string('address',255)->default('No address');
            $table->string('phone',20);
            $table->enum('gender',['M','F']);
            $table->string('pass',100);
            $table->timestamps(); // created_at updated_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
