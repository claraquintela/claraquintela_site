<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("courses", function (Blueprint $table) {
            $table->text("category"); // exemplo de criação de uma nova coluna. Usar "change" no lugar de default quando for só uma modificação
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("courses", function (Blueprint $table) {
            $table->dropColumn("category");
        });
    }
};
