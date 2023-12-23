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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->enum('role', ['user','instructor'])->default('user')->comment('1=>Instructor, 2=>User');
            $table->string('email');
            $table->unsignedBigInteger('phone')->nullable();
            $table->string('image')->default('user.png')->nullable();
            $table->string('about')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('nid')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('gender')->nullable();
            $table->string('edu_qualification')->nullable();
            $table->string('experience')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('staff_type')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('office_zone')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('discharge_date')->nullable();
            $table->string('machine_id')->nullable();
            $table->string('description')->nullable();
            $table->string('marital_status')->nullable();

            $table->string('show_password');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_deleted')->default(0);
            $table->tinyInteger('menu')->default(1);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
