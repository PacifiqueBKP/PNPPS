<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(): void { Schema::create('payments', function(Blueprint $t){ $t->id(); $t->foreignId('user_id')->constrained('users'); $t->string('provider',30); $t->decimal('amount',14,2); $t->string('currency',3); $t->string('purpose',160); $t->string('status',30)->default('pending'); $t->string('reference',80)->unique(); $t->timestamps(); }); }
 public function down(): void { Schema::dropIfExists('payments'); }
};