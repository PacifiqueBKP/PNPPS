<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(): void { Schema::create('publication_files', function(Blueprint $t){ $t->id(); $t->foreignId('publication_id')->constrained('publications')->cascadeOnDelete(); $t->foreignId('uploaded_by')->constrained('users'); $t->string('original_name'); $t->string('mime_type',120); $t->unsignedBigInteger('size_bytes'); $t->string('storage_path'); $t->string('type',30)->default('manuscrit'); $t->timestamps(); }); }
 public function down(): void { Schema::dropIfExists('publication_files'); }
};