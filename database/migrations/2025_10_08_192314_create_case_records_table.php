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
        Schema::create('case_records', function (Blueprint $table) {
           $table->id();
           $table->foreignId('laywer_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
           $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete()->cascadeOnUpdate();
           $table->foreignId('case_type_id')->constrained('case_types')->cascadeOnDelete()->cascadeOnUpdate();
           $table->foreignId('court_type_id')->constrained('court_types')->cascadeOnDelete()->cascadeOnUpdate();
           $table->string('case_number',100)->nullable();
           $table->enum('on_behalf', ['petitioner', 'respondent'])->default('petitioner');

           $table->string('section')->nullable();
           $table->string('judge_name')->nullable();
           $table->enum('status', ['open', 'closed', 'inactive'])->default('open');
           $table->date('filed_date')->nullable();
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
        Schema::dropIfExists('case_records');
    }
};
