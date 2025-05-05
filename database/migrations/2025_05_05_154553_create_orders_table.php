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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('order_number', 50)->unique(); 
            $table->decimal('total_amount', 10, 2); 
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending'); 
            $table->string('payment_method', 50); 
            $table->text('shipping_address'); 
            $table->timestamp('created_at')->nullable(); 
            $table->timestamp('updated_at')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

