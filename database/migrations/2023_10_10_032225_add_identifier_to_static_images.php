<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdentifierToStaticImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('static_images', function (Blueprint $table) {
        $table->string('identifier')->unique();
    });
}

public function down()
{
    Schema::table('static_images', function (Blueprint $table) {
        $table->dropColumn('identifier');
    });
}

}