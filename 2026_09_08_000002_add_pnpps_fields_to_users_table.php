<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('province_id')->nullable()->constrained('provinces');
            $table->string('domain',160)->nullable();
            $table->string('role',40)->default('filleul')->index();
        });
    }
    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('province_id');
            $table->dropColumn(['domain','role']);
        });
    }
};