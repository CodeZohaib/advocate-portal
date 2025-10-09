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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laywer_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('full_name',150)->nullable();
            $table->string('father_name',150)->nullable();
            $table->string('cnic',20)->nullable();
            $table->string('contact_no',30)->nullable();
            $table->string('address',255)->nullable();
            $table->string('status',255)->default('active');
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
        Schema::dropIfExists('clients');
    }
};
