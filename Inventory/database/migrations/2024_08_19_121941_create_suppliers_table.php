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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('SupplierID');
            $table->string('SupplierName', 100);
            $table->string('ContactName', 100)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('City', 100)->nullable();
            $table->string('PostalCode', 50)->nullable();
            $table->string('Country', 50)->nullable();
            $table->string('Phone', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
