<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('membership_no')->unique();
            $table->string('member_class');
            $table->date('membership_start_date');
            $table->date('membership_expiry_date');
            $table->string('membership_validity');
            $table->integer('no_of_renewal');
            $table->decimal('payment_amount', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('payment_receipt_no')->nullable();
            $table->string('payment_note')->nullable();
            $table->timestamps();
        });
    }
}
