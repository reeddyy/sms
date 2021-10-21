<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsModulesTable extends Migration
{
    public function up()
    {
        Schema::create('results_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_release')->nullable();
            $table->integer('total_result_points')->nullable();
            $table->date('date_transcript_sent_1')->nullable();
            $table->date('date_transcript_sent_2')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
