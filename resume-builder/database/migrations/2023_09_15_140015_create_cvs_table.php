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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('jobtitle');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('description');
            $table->string('fieldofstudy');
            $table->string('degree');
            $table->string('school');
            $table->date('edufromyear');
            $table->date('edutoyear');
            $table->string('experiencetitle');
            $table->string('company');
            $table->date('fromyear');
            $table->date('toyear');
            $table->string('experiencedescription');
            $table->string('skill');
            $table->string('proficiency');

            $table->timestamps();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};