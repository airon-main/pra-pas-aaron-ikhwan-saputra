<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_class_cars', function (Blueprint $table) {
            $table->id();
            $table->char("class");
            $table->string("brand");
            $table->string("model");
            $table->integer("level");
            $table->double("topspeed");
            $table->double("acceleration");
            $table->double("handling");
            $table->double("nitrous");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_class_cars');
    }
};
