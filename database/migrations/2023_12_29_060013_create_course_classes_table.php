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
            $table->string('video')->nullable();
            $table->text('lecture_shit')->nullable();
            $table->text('course_name')->nullable();
            $table->string('course_name_slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('course_level')->nullable();
            $table->string('course_lessons')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_hours')->nullable();
            $table->string('resources')->nullable();
            $table->string('certificate')->nullable();
            $table->double('regular_price')->default(0.00);
            $table->double('discount_price')->default(0.00);
            $table->unsignedTinyInteger('discount_type')->default(1)->comment('1=>Flat, 2=>Percentage');
            $table->text('prerequisites')->nullable();
            $table->string('bestseller')->nullable();
            $table->string('featured')->nullable();
            $table->string('highestrated')->nullable();
            $table->string('promo_code', 50)->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=Inactive','1=Active'); 
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
