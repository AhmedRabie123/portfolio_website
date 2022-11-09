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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->integer('portfolio_category_id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('photo');
            $table->string('banner');
            $table->string('project_client')->nullable();
            $table->string('project_company')->nullable();
            $table->string('project_start_date')->nullable();
            $table->string('project_end_date')->nullable();
            $table->string('project_cost')->nullable();
            $table->string('project_website')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
};
