<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(): void { Schema::create('audit_logs', function(Blueprint $t){ $t->id(); $t->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete(); $t->string('action',120); $t->string('entity_type',120)->nullable(); $t->unsignedBigInteger('entity_id')->nullable(); $t->ipAddress('ip_address')->nullable(); $t->text('user_agent')->nullable(); $t->json('metadata')->nullable(); $t->timestamps(); $t->index(['entity_type','entity_id']); $t->index('action'); }); }
 public function down(): void { Schema::dropIfExists('audit_logs'); }
};
