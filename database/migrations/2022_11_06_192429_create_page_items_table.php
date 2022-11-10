<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_items', function (Blueprint $table) {
            $table->id();
            $table->string('services_heading');
            $table->string('services_banner');
            $table->string('services_seo_title')->nullable();
            $table->text('services_seo_meta_description')->nullable();
            $table->string('portfolio_heading');
            $table->string('portfolio_banner');
            $table->string('portfolio_seo_title')->nullable();
            $table->text('portfolio_seo_meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_items');
    }
};
