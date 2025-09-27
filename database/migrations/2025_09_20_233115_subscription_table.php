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
        Schema::create('subscription', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');
            $table->string('plan_name');
            $table->string('cycle');
            $table->integer('price');
            $table->boolean('payment_status')->default(false);
            $table->boolean('sub_status')->default(false);
            $table->integer('expiring_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
