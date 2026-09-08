<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(): void { Schema::create('webhook_events', function(Blueprint $t){ $t->id(); $t->string('provider',40); $t->string('event_id',160)->unique(); $t->json('payload'); $t->string('signature',255)->nullable(); $t->string('status',30)->default('received'); $t->timestamp('processed_at')->nullable(); $t->timestamps(); $t->index(['provider','status']); }); }
 public function down(): void { Schema::dropIfExists('webhook_events'); }
};
