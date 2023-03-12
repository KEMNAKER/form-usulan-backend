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
        Schema::create('proposal_form', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')();
            $table->integer('stechelon_id')();
            $table->integer('type_id')();
            $table->integer('priority_id')();
            $table->string('name')();
            $table->string('apk_name')();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_form');
    }
};
