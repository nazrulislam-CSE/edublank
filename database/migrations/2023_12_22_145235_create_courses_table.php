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
            $table->integer('class_id');
            $table->integer('subject_id');
            $table->string('image')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_bn')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_bn')->nullable();
            $table->string('video_link')->nullable();
            $table->string('level')->nullable();
            $table->string('lessons')->nullable();
            $table->string('duration')->nullable();
            $table->string('hours')->nullable();
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
            $table->tinyInteger('status')->default(0)->comment('1=Active','0=Inactive'); 
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
