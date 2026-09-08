<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('mentor_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->constrained('users');
            $table->foreignId('filleul_id')->constrained('users');
            $table->string('domain',160);
            $table->string('status',30)->default('active');
            $table->timestamps();
            $table->unique(['mentor_id','filleul_id']);
        });
    }
    public function down(): void { Schema::dropIfExists('mentor_matches'); }
};