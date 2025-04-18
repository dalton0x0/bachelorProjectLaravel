<?php

use App\Models\Classroom;
use App\Models\Evaluation;
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
        Schema::create('classroom_evaluation', function (Blueprint $table) {
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Evaluation::class)->constrained()->cascadeOnDelete();
            $table->primary(['classroom_id', 'evaluation_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_evaluation');
    }
};
