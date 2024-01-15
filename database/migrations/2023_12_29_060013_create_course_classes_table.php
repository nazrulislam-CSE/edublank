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
        Schema::create('course_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_bn')->nullable();
            $table->string('video')->nullable();
            $table->string('lecture_shit')->nullable(); 
            $table->integer('subject_id')->nullable(); 
            $table->integer('course_id')->nullable(); 
            $table->string('listening_voice')->nullable(); 
            $table->text('description_en')->nullable(); 
            $table->text('description_bn')->nullable(); 
            $table->tinyInteger('status')->default(0)->comment('0=Inactive','1=Active'); 
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_classes');
    }
};