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
        Schema::create('jfups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proposal_form_id');
            $table->unsignedBigInteger('proposal_type_id');
            $table->unsignedBigInteger('priority_level_id');
            $table->string('feature');
            $table->text('statement');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jfups');
    }
};
