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
        Schema::create('sub_types', function (Blueprint $table) {
            $table->id();
            $table->string('sub_type');
            $table->unsignedBigInteger('cate_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_types');
    }
};
