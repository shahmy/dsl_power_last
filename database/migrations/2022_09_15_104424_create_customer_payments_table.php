<?php

use Filament\Forms\Components\Tabs\Tab;
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
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('invoice_no');
            $table->date('invoice_date')->nullable();
            $table->longText('invoice_details')->nullable();
            $table->decimal('invoice_amount',16,2);
            $table->date('payment_date')->nullable();
            $table->string('invoice_file')->nullable();
            $table->longText('response_details')->nullable();
            $table->boolean('payment_status')->default(0);
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
        Schema::dropIfExists('customer_payments');
    }
};
