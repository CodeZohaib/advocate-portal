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
        Schema::create('hearings', function (Blueprint $table) {
            $table->id();
             // Foreign keys
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->cascadeOnUpdate();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade')->cascadeOnUpdate();
            $table->foreignId('case_id')->constrained('case_records')->onDelete('cascade')->cascadeOnUpdate();

            // Hearing details
            $table->date('previous_date')->nullable();
            $table->date('next_date');
            $table->text('remarks')->nullable();
            $table->string('document')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hearings');
    }
};
