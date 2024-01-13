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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_en')->nullable();
            $table->string('question_bn')->nullable();
            $table->string('optiona_en')->nullable();
            $table->string('optiona_bn')->nullable();
            $table->string('optionb_en')->nullable();
            $table->string('optionb_bn')->nullable();
            $table->string('optionc_en')->nullable();
            $table->string('optionc_bn')->nullable();
            $table->string('optiond_en')->nullable();
            $table->string('optiond_bn')->nullable();
            $table->string('answer')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('types')->default(1)->comment('1=Reading Quiz','2=Vocabulary Quiz','3=Chapter Quiz');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=Active','0=Inactive'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
