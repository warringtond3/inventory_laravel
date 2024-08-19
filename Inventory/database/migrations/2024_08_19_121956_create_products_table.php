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
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');  // This creates an unsigned BIGINT as the primary key
            $table->string('ProductName', 100);
            $table->unsignedBigInteger('CategoryID'); // Ensure this is an unsignedBigInteger
            $table->unsignedBigInteger('SupplierID'); // Ensure this is an unsignedBigInteger
            $table->string('QuantityPerUnit', 50)->nullable();
            $table->decimal('UnitPrice', 18, 2)->nullable();
            $table->integer('UnitsInStock')->nullable();
            $table->integer('UnitsOnOrder')->nullable();
            $table->integer('ReorderLevel')->nullable();
            $table->boolean('Discontinued')->default(false);
            $table->timestamps();
    
            // Define Foreign Key Constraints
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
