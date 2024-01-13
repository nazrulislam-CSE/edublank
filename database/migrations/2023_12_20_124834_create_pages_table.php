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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name_en', 100)->nullable();
            $table->string('page_name_bn', 100)->nullable();
            $table->string('page_title_en', 100)->nullable();
            $table->string('page_title_bn', 100)->nullable();
            $table->string('page_slug', 100)->nullable();
            $table->longtext('page_description_en')->nullable();
            $table->longtext('page_description_bn')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('keywords')->nullable();
            $table->longtext('meta_description')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('is_default')->nullable();
            $table->unsignedTinyInteger('position')->default(1)->comment('1=>Top Position, 2=>Middle Position, 3=>Bootom Position');
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>Active, 0=>Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
