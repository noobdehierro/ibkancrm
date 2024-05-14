<?php

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
        Schema::create('debtors', function (Blueprint $table) {
            $table->id();
            $table->string('access_code');
            $table->string('credit_number');
            $table->string('full_name');
            $table->string('status')->nullable();
            $table->float('remainingDebt', 10, 2)->nullable();
            $table->date('nextPayday')->nullable();
            $table->float('sce', 10, 2)->nullable();
            $table->string('minimum_to_collect')->nullable();
            $table->float('cash', 10, 2)->nullable();
            $table->string('nameInCash')->nullable();
            $table->float('one_three_months', 10, 2)->nullable();
            $table->string('nameInOne_threeMonths')->nullable();
            $table->float('four_six_months', 10, 2)->nullable();
            $table->string('nameInFour_sixMonths')->nullable();
            $table->float('seven_twelve_months', 10, 2)->nullable();
            $table->string('nameInSeven_twelveMonths')->nullable();
            $table->float('thirteen_eighteen_months', 10, 2)->nullable();
            $table->string('nameInThirteen_eighteenMonths')->nullable();
            $table->float('nineteen_twentyfour_months', 10, 2)->nullable();
            $table->string('nameInNineteen_twentyfourMonths')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('agreement')->nullable();
            $table->string('payment_bank')->nullable();
            $table->string('payment_bank_full_name')->nullable();
            $table->string('interbank_key')->nullable();
            $table->string('product')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('origin_bank')->nullable();
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
        Schema::dropIfExists('debtors');
    }
};
