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
        Schema::create('panoramas', function (Blueprint $table) {
            $table->id();
            $table->integer("page")->nullable();
            $table->integer("catalog_number")->nullable();
            $table->string("title");
            $table->string("description", 2048);
            $table->string("img");
            $table->string("extra_description")->nullable();
            $table->string("extra_description_1", 2048)->nullable();
            $table->string("extra_description_2", 2048)->nullable();
            $table->string("extra_description_3", 2048)->nullable();
            $table->string("extra_description_4", 2048)->nullable();
            $table->string("extra_img_1")->nullable();
            $table->string("extra_img_2")->nullable();
            $table->string("extra_img_3")->nullable();
            $table->string("extra_img_4")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panoramas');
    }
};