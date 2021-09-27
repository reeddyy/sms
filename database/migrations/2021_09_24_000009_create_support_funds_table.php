<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportFundsTable extends Migration
{
    public function up()
    {
        Schema::create('support_funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fund_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
