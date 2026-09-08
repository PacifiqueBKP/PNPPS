<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('publication_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_id')->constrained('publications')->cascadeOnDelete();
            $table->foreignId('reviewer_id')->constrained('users');
            $table->string('decision',30);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('publication_reviews'); }
};