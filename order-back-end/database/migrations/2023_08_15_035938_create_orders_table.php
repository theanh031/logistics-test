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
            $table->foreignId('customer_send_id') -> constrained('customers') -> cascadeOnDelete();
            $table->foreignId('customer_receive_id') -> constrained('customers') -> cascadeOnDelete();
            $table->foreignIdFor(\App\Models\StaffDelivery::class, 'staff_delivery_id') -> constrained() -> cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Payment::class, 'payment_id') -> constrained() -> cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Status::class, 'status_id') -> constrained() -> cascadeOnDelete();
            $table->date('expected_date');
            $table->timestamps();
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
