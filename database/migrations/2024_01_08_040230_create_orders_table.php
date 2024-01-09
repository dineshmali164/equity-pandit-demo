<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Product::class);
            $table->text('phone');
            $table->text('name');
            $table->text('email');
            $table->text('address');
            $table->text('order_id');
            $table->dateTime('expected_delivery_date');
            $table->string('payment_mode')->default(PAYMENT_CASH_ON_DELIVERY);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
