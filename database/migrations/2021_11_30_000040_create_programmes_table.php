<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('edp_title')->unique();
            $table->string('edp_abbr')->nullable();
            $table->string('duration_day')->nullable();
            $table->decimal('member_rate', 15, 2)->nullable();
            $table->decimal('public_rate', 15, 2)->nullable();
            $table->string('edp_status')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
