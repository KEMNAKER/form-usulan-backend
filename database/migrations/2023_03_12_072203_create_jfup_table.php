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
        Schema::create('jfup', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')();
            $table->string('type')();
            $table->string('feature')();
            $table->string('statement')();
            $table->string('priority')();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jfup');
    }
};
