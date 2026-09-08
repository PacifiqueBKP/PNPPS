<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(): void { Schema::table('publications', function(Blueprint $t){ $t->string('public_code',80)->nullable()->unique(); $t->string('doi',255)->nullable()->unique(); }); }
 public function down(): void { Schema::table('publications', function(Blueprint $t){ $t->dropColumn(['public_code','doi']); }); }
};