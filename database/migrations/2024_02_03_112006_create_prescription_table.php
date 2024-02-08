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
        Schema::create('prescription', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('p_id');
            $table->tinyInteger('d_id');
            $table->string('medicine', 50);
            $table->string('dose', 20);
            $table->string('days', 15);
            $table->date('date', 15);
            $table->timestamp('craeted_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription');
    }
};
