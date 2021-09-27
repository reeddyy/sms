<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberClassesTable extends Migration
{
    public function up()
    {
        Schema::create('member_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_class_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
