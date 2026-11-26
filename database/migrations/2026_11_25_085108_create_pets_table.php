
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pet_category_id')
                ->constrained('pet_categories')
                ->restrictOnDelete();

            $table->foreignId('shelter_id')
                ->nullable()
                ->constrained('shelters')
                ->nullOnDelete();

            $table->string('name');
            $table->string('breed')->nullable();
            $table->string('gender', 20);
            $table->unsignedSmallInteger('age_months')->default(0);
            $table->string('size', 30)->nullable();

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->string('health_status')->default('Sehat');

            $table->enum('status', [
                'tersedia',
                'proses_adopsi',
                'diadopsi'
            ])->default('tersedia');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
