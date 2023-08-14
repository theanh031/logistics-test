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
            $table->id();
            $table->string('name', 255);
            $table->foreignIdFor(\App\Models\ProductType::class, 'product_type_id') ->constrained() -> cascadeOnDelete();
            $table->foreignIdFor(\App\Models\ProductSize::class, 'product_size_id') -> constrained() -> cascadeOnDelete();
            $table->integer('count');
            $table->float('price');
            $table->timestamps();
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
