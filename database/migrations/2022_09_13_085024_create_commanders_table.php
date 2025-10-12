<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commanders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('slug');
            $table->integer('user_id');
            $table->text('commander_roles');
            $table->string('picture');
            $table->string('commander_type');
            // $table->string('appointed_date');

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
        Schema::dropIfExists('commanders');
    }
}
