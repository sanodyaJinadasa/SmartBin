<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('waste_sales', function (Blueprint $table) {
         $table->id();

        $table->foreignId('user_id')->constrained()->onDelete('cascade');

        $table->string('type');
        $table->decimal('quantity', 8, 2);

        $table->string('mobile');

        $table->text('description')->nullable();

        $table->string('image')->nullable();

        $table->string('address')->nullable();

        $table->tinyInteger('status')
            ->default(1)
            ->comment('1=available, 2=requested, 3=sold, 0=deleted');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waste_sales');
    }
};
