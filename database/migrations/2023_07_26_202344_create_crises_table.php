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
        Schema::create('crises', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('status',10)->default('active');
            $table->text('description')->nullable();
            $table->double('amount_need',10,2)->default(0.0);
            $table->double('amount_raised',10,2)->default(0.0);
            $table->double('amount_due',10,2)->default(0.0);
            $table->dateTime('from_date')->nullable();
            $table->dateTime('to_date')->nullable();
            $table->foreignId('volunteerUser_id');
            $table->string('image')->nullable();
            $table->longText('about_crisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crises');
    }
};
