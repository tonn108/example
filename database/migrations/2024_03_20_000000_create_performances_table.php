<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->string('task_type');
            $table->string('task_name');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->string('status');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('performances');
    }
};