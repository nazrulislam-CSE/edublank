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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('instructor_id');
            $table->string('course_image')->nullable();
            $table->text('course_title')->nullable();
            $table->text('course_name')->nullable();
            $table->string('course_name_slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('video')->nullable();
            $table->string('course_level')->nullable();
            $table->string('course_lessons')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_hours')->nullable();
            $table->string('resources')->nullable();
            $table->string('certificate')->nullable();
            $table->integer('selling_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->text('prerequisites')->nullable();
            $table->string('bestseller')->nullable();
            $table->string('featured')->nullable();
            $table->string('highestrated')->nullable();
            $table->string('promo_code', 50)->nullable();
            $table->unsignedTinyInteger('discount_type')->default(1)->comment('1=>Flat, 2=>Percentage');
            $table->tinyInteger('status')->default(0)->comment('0=Inactive','1=Active'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
