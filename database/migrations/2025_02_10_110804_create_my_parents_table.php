<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            //ايميل و كلمة مرور سواء للأب أو للأم لأنه بالنهاية هذا ايميل لولي الأمر
            $table->string('email');
            $table->string('password');

            //father information
            $table->string('father_name');
            $table->string('father_national_id');
            $table->string('father_phone');
            $table->string('father_Job');
            $table->string('father_address');
            $table->foreignId('father_nationality')->constrained('nationalities')->cascadeOnDelete();
            $table->foreignId('father_religion')->constrained('religions')->cascadeOnDelete();
            $table->foreignId('father_type_blood')->constrained('type_bloods')->cascadeOnDelete();

            //mother information
            $table->string('mother_name');
            $table->string('mother_national_id');
            $table->string('mother_phone');
            $table->string('mother_Job');
            $table->string('mother_address');
            $table->foreignId('mother_nationality')->constrained('nationalities')->cascadeOnDelete();
            $table->foreignId('mother_religion')->constrained('religions')->cascadeOnDelete();
            $table->foreignId('mother_type_blood')->constrained('type_bloods')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_parents');
    }
};
