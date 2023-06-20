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
        Schema::create('my_inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId("inventory_id")->constrained("inventories")->cascadeOnDelete();
            $table->integer("quantity");
            $table->integer("sold");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_inventory');
    }
};