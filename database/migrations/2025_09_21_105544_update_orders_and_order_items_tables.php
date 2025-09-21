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
        // Drop existing tables if they exist
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        
        // Create orders table with correct schema
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('customer_id')->nullable(); // Keep existing customer_id
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email')->nullable();
            $table->text('customer_address');
            $table->string('customer_city');
            $table->string('customer_district');
            $table->string('customer_ward');
            $table->enum('payment_method', ['cod', 'bank_transfer']);
            $table->decimal('subtotal', 15, 2);
            $table->decimal('discount', 15, 2)->default(0);
            $table->string('discount_code')->nullable();
            $table->decimal('total_amount', 15, 2); // Keep existing total_amount name
            $table->enum('status', ['pending', 'confirmed', 'shipping', 'delivered', 'cancelled'])->default('pending');
            $table->text('notes')->nullable(); // Keep existing notes name
            $table->integer('total_items')->default(0);
            $table->timestamps();
            
            // Add foreign key constraint for customer_id if customers table exists
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('set null');
        });

        // Create order_items table with correct schema
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('product_name');
            $table->decimal('price', 15, 2); // Keep existing price name
            $table->integer('quantity');
            $table->decimal('subtotal', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};