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
        Schema::create('admission_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile_number', 20);
            $table->string('guardian_mobile_number', 20)->nullable();
            $table->string('interested_course');
            $table->string('city');
            $table->string('state');
            $table->enum('scholarship_status', ['scholarship', 'non-scholarship'])->default('non-scholarship');
            $table->decimal('admission_budget', 10, 2)->nullable();
            $table->string('status')->default('pending'); // pending, contacted, enrolled, rejected
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_inquiries');
    }
};
