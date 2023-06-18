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
        Schema::create('salesreport', function (Blueprint $table) {
            $table->id('Sales_ID');
            $table->foreignId('User_ID')->constrained();
            $table->foreignId('Inventory_ID');
            $table->string('product_Name');
            $table->integer('Quantity');
            $table->double('Price');
            $table->date('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesreport');
    }
};
