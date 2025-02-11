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
        Schema::create('deportista', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('deporte', 100);
            $table->integer('edad');
            $table->decimal('altura', 5, 2);
            $table->decimal('peso', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deportista');
    }
};
/* \u0043\u0072\u0065\u0061\u0064\u006f \u0070\u006f\u0072 \u0049\u0073\u006d\u0061\u0065\u006c \u004d\u0061\u006e\u007a\u0061\u006e\u006f */