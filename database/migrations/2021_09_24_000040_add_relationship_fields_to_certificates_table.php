<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCertificatesTable extends Migration
{
    public function up()
    {
        Schema::table('certificates', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_name_id');
            $table->foreign('recipient_name_id', 'recipient_name_fk_4947723')->references('id')->on('individuals');
        });
    }
}
