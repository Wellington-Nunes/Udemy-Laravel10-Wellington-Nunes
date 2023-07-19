<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produtos_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos');
            $table->foreignId('tag_id')->constrained('tags');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos_tags');
    }
};
