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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('rate' );
            $table->foreignIdFor(\App\Models\Customer::class, 'customer_id') -> constrained() -> cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Order::class, 'order_id') -> constrained() -> cascadeOnDelete();
            $table->text('content');
            $table->text('image');
            $table->text('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
