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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('cell_number');
            $table->unsignedBigInteger('computer_id');
            $table->foreignId('course_id')->constrained('courses');
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
