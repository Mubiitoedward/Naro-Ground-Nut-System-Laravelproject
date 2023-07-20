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
        Schema::create('service_provider_records', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('Sex');
            $table->string('PhoneNumber');
            $table->string('ServiceProvided');
            $table->string('Category');
            $table->string('YearsOfOperation');
            $table->string('DateOfRegistration');
            $table->string('RegistrationNumber');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_provider_records');
    }
};
