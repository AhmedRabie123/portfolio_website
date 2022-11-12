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
            $table->string('about_heading');
            $table->string('about_banner');
            $table->string('about_photo')->nullable();
            $table->text('about_description');
            $table->string('about_seo_title')->nullable();
            $table->text('about_seo_meta_description')->nullable();
            $table->string('contact_heading');
            $table->string('contact_banner');
            $table->text('contact_address');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->text('contact_map_iframe');
            $table->string('contact_seo_title')->nullable();
            $table->text('contact_seo_meta_description')->nullable();
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
